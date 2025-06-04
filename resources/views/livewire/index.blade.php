{{-- <div class="flex justify-between gap-4 mt-4 items-start">
    <div class="bg-base-300 p-4 rounded-lg w-full">
        <h1 class="text-2xl font-semibold">To Do</h1>
        <div class="tasks mt-4 flex flex-col gap-2">
            @foreach ($tasks->where('status', 'To Do') as $task)
                <div wire:key="{{ $task->id }}" class="task-item p-4 bg-base-100 rounded-lg shadow flex flex-col gap-2">
                    <div class="flex justify-between items-center">
                        <span class="text-xs text-gray-500">{{ $task->created_at->diffForHumans() }}</span>
                        <button wire:click="deleteTask({{ $task->id }})" class="btn btn-xs btn-error">Delete</button>
                    </div>
                    <h2 class="font-semibold">{{ $task->title }}</h2>
                    <p class="text-xs text-gray-600">{{ $task->description }}</p>
                </div>
            @endforeach
            @if (Auth::user()->tasks->where('status', 'To Do')->isEmpty())
                <p class="text-base-500 font-semibold text-sm opacity-75">You have no tasks.</p>
            @endif
        
        </div>
    </div>
    <div class="bg-base-300 p-4 rounded-lg w-full">
        <h1 class="text-2xl font-semibold">In Progress</h1>
        <div class="tasks mt-4 flex flex-col gap-2">
            @foreach ($tasks->where('status', 'In Progress') as $task)
                <div wire:key="{{ $task->id }}" class="task-item p-4 bg-base-100 rounded-lg shadow flex flex-col gap-2">
                    <h2 class="text-lg font-semibold">{{ $task->title }}</h2>
                    <p class="text-sm text-gray-600 mt-2">{{ $task->description }}</p>
                </div>
            @endforeach
            @if (Auth::user()->tasks->where('status', 'In Progress')->isEmpty())
                <p class="text-base-500 opacity-75 font-semibold text-sm">You have no tasks.</p>
            @endif
        </div>
    </div>
    <div class="bg-base-300 p-4 rounded-lg w-full">
        <h1 class="text-2xl font-semibold">Done</h1>
        <div class="tasks mt-4 flex flex-col gap-2">
            @foreach ($tasks->where('status', 'Done') as $task)
                <div wire:key="{{ $task->id }}" class="task-item p-4 bg-base-100 rounded-lg shadow flex flex-col gap-2">
                    <h2 class="text-lg font-semibold">{{ $task->title }}</h2>
                    <p class="text-sm text-gray-600 mt-2">{{ $task->description }}</p>
                </div>
            @endforeach
            @if (Auth::user()->tasks->where('status', 'Done')->isEmpty())
                <p class="text-base-500 font-semibold text-sm opacity-75">You have no tasks.</p>
            @endif
        </div>
    </div>
</div> --}}

<div wire:sortable="updateGroupOrder" wire:sortable-group="updateTaskOrder" class="flex justify-between gap-4 mt-4 items-start">
    @foreach ($statuses as $status)
        <div wire:key="group-{{ $status }}" wire:sortable.item="{{ $status }}" class="bg-base-300 p-4 rounded-lg w-full">
            <h1 wire:sortable.handle class="text-2xl font-semibold">{{ $status }}</h1>
            <div wire:sortable-group.item-group={{ $status }} class="tasks mt-4 flex flex-col gap-2">
                @foreach ($tasks[$status] as $task)
                    <div wire:key="{{ $task->id }}" wire:sortable-group.item="{{ $task->id }}" class="task-item p-4 bg-base-100 rounded-lg shadow flex flex-col gap-2">
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-500">{{ $task->created_at->diffForHumans() }}</span>
                            <button wire:click="deleteTask({{ $task->id }})" class="btn btn-xs btn-error">Delete</button>
                        </div>
                        <h2 class="font-semibold" wire:sortable-group.handle>{{ $task->title }}</h2>
                        <p class="text-xs text-gray-600">{{ $task->description }}</p>
                    </div>
                @endforeach
                @if (Auth::user()->tasks->where('status', 'To Do')->isEmpty())
                    <p class="text-base-500 font-semibold text-sm opacity-75">You have no tasks.</p>
                @endif
            </div>
        </div>
    @endforeach
</div>
