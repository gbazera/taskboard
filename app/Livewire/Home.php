<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;

class Home extends Component
{
    public $statuses = [
        ['id' => 'todo', 'name' => 'To Do'],
        ['id' => 'in-progress', 'name' => 'In Progress'],
        ['id' => 'done', 'name' => 'Done'],
    ];

    protected function getStatusNameFromId($id){

        foreach ($this->statuses as $status) {

            if ($status['id'] === $id) {
                return $status['name'];
            }
        }

        return null;
    }

    public function updateTaskOrder($groups)
    {
        foreach ($groups as $group) {
            
            $statusId = $group['value'];
            $statusName = $this->getStatusNameFromId($statusId);

            foreach ($group['items'] as $item) {
                $taskId = $item['value'];
                $newOrder = $item['order'];

                $task = Auth::user()->tasks()->find($taskId);
                if ($task) {
                    $task->update([
                        'status' => $statusName,
                        'order' => $newOrder
                    ]);
                }
            }
        }
    }

    public function deleteTask($taskId){

        $task = Auth::user()->tasks()->find($taskId);
        if ($task) {
            $task->delete();
        } else {
            Log::warning("Attempted to delete a task with ID {$taskId} that does not exist for the authenticated user.");
        }
    }

    public function render()
    {
        // 1. Fetch all raw task models for the user, ordered correctly.
        $rawTasks = Auth::user()->tasks()->orderBy('order')->get();

        $tasksGrouped = [];

        // 2. Initialize $tasksGrouped with all defined status names as keys.
        // Each key will hold an empty Laravel Collection.
        // This ensures that $tasksGrouped['To Do'], $tasksGrouped['In Progress'], etc., always exist.
        foreach ($this->statuses as $statusInfo) { // $statusInfo is an array like ['id' => 'todo', 'name' => 'To Do']
            if (isset($statusInfo['name'])) {
                $tasksGrouped[$statusInfo['name']] = collect();
            } else {
                // This indicates an issue with the structure of $this->statuses
                Log::error('Render method: A $statusInfo item in $this->statuses is missing the "name" key. Item:', (array) $statusInfo);
            }
        }

        // 3. Populate the $tasksGrouped collections with the actual task models.
        // Here, $taskModel is an individual Task model instance.
        foreach ($rawTasks as $taskModel) {
            if (isset($taskModel->status) && array_key_exists($taskModel->status, $tasksGrouped)) {
                // $taskModel->status should be 'To Do', 'In Progress', or 'Done'
                $tasksGrouped[$taskModel->status]->push($taskModel);
            } else {
                // This logs tasks that have a status not defined in $this->statuses
                // or if $taskModel->status is null/unexpected.
                Log::warning("Task ID: {$taskModel->id} has status '{$taskModel->status}' which is not a recognized group name for rendering. Defined groups: " . implode(', ', array_keys($tasksGrouped)));
            }
        }

        // 4. Return the correctly prepared $tasksGrouped to the view.
        return view('livewire.home', [
            'tasks' => $tasksGrouped, // This now contains all status groups, possibly with empty task collections
            'statuses' => $this->statuses,
        ]);
    }

}
