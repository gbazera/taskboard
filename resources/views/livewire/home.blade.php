<div wire:sortable-group="updateTaskOrder" class="flex justify-between gap-4 mt-4 items-start">
    @foreach ($statuses as $statusInfo)
        <div wire:key="group-{{ $statusInfo['id'] }}" wire:sortable.item="{{ $statusInfo['id'] }}" class="bg-base-300 p-4 rounded-lg w-full">
            <h1 wire:sortable.handle class="text-2xl font-semibold">{{ $statusInfo['name'] }}</h1>
            <div wire:sortable-group.item-group={{ $statusInfo['id'] }} class="tasks mt-4 flex flex-col gap-2">
                @foreach ($tasks[$statusInfo['name']] as $task)
                    <div wire:key="{{ $task->id }}" wire:sortable-group.item="{{ $task->id }}" class="task-item p-4 bg-base-100 rounded-lg shadow flex flex-col gap-2">
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-500">{{ $task->created_at->diffForHumans() }}</span>
                            <button wire:click="deleteTask({{ $task->id }})" class="btn btn-xs btn-error">Delete</button>
                        </div>
                        <h2 class="font-semibold">{{ $task->title }}</h2>
                        <p class="text-xs text-gray-600">{{ $task->description }}</p>
                    </div>
                @endforeach
                @if ($tasks[$statusInfo['name']]->isEmpty())
                    <p class="text-base-500 font-semibold text-sm opacity-75">You have no tasks.</p>
                @endif
            </div>
        </div>
    @endforeach
</div>