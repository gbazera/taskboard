<div>
    <nav class="navbar my-2">
        <div class="flex-1">
            <a href="{{ route('home') }}" class="text-xl font-bold hover:opacity-75 transition-all">Taskboard</a>
        </div>
        <div>
            <div class="flex grow justify-end">
                <div class="flex items-stretch gap-2">
                    <label class="btn btn-ghost pl-3" for="new_task_modal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                            <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                        </svg>

                        New Task
                    </label>
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-primary pr-3">
                            {{ Auth::user()->name }}
                            
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <ul
                        tabindex="0"
                        class="menu dropdown-content bg-base-200 rounded-box z-1 mt-2 w-29 p-2 shadow-lg">
                        <li><a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                <path fill-rule="evenodd" d="M6.455 1.45A.5.5 0 0 1 6.952 1h2.096a.5.5 0 0 1 .497.45l.186 1.858a4.996 4.996 0 0 1 1.466.848l1.703-.769a.5.5 0 0 1 .639.206l1.047 1.814a.5.5 0 0 1-.14.656l-1.517 1.09a5.026 5.026 0 0 1 0 1.694l1.516 1.09a.5.5 0 0 1 .141.656l-1.047 1.814a.5.5 0 0 1-.639.206l-1.703-.768c-.433.36-.928.649-1.466.847l-.186 1.858a.5.5 0 0 1-.497.45H6.952a.5.5 0 0 1-.497-.45l-.186-1.858a4.993 4.993 0 0 1-1.466-.848l-1.703.769a.5.5 0 0 1-.639-.206l-1.047-1.814a.5.5 0 0 1 .14-.656l1.517-1.09a5.033 5.033 0 0 1 0-1.694l-1.516-1.09a.5.5 0 0 1-.141-.656L2.46 3.593a.5.5 0 0 1 .639-.206l1.703.769c.433-.36.928-.65 1.466-.848l.186-1.858Zm-.177 7.567-.022-.037a2 2 0 0 1 3.466-1.997l.022.037a2 2 0 0 1-3.466 1.997Z" clip-rule="evenodd" />
                            </svg>

                            Settings
                        </a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="flex items-center gap-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                        <path fill-rule="evenodd" d="M14 4.75A2.75 2.75 0 0 0 11.25 2h-3A2.75 2.75 0 0 0 5.5 4.75v.5a.75.75 0 0 0 1.5 0v-.5c0-.69.56-1.25 1.25-1.25h3c.69 0 1.25.56 1.25 1.25v6.5c0 .69-.56 1.25-1.25 1.25h-3c-.69 0-1.25-.56-1.25-1.25v-.5a.75.75 0 0 0-1.5 0v.5A2.75 2.75 0 0 0 8.25 14h3A2.75 2.75 0 0 0 14 11.25v-6.5Zm-9.47.47a.75.75 0 0 0-1.06 0L1.22 7.47a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06l-.97-.97h7.19a.75.75 0 0 0 0-1.5H3.56l.97-.97a.75.75 0 0 0 0-1.06Z" clip-rule="evenodd" />
                                    </svg>

                                    Logout
                                </button>
                            </form>
                        </li>
                        </ul>
                    </div>
                    <div class="flex items-center ml-2">
                        <label class="flex cursor-pointer gap-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5" />
                                <path
                                d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                            </svg>
                            <input type="checkbox" value="night" class="toggle theme-controller" />
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <input type="checkbox" id="new_task_modal" class="modal-toggle" />
    <div class="modal" role="dialog">
        <div class="modal-box">
            <h3 class="text-lg font-bold mb-4">Create a new task</h3>
            <form wire:submit.prevent="createTask">
                <input type="text" placeholder="Task title" class="input input-bordered w-full" wire:model="title" />
                @error('title')
                    <span class="text-red-500 text-xs font-medium">{{ $message }}</span>
                @enderror
                <textarea class="textarea textarea-bordered w-full mt-2" placeholder="Task description" wire:model="description"></textarea>
                @error('description')
                    <span class="text-red-500 text-xs font-medium">{{ $message }}</span>
                @enderror
                <select class="select select-bordered w-full mt-2" wire:model="status">
                    <option value="To Do">To Do</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Done">Done</option>
                </select>
                @error('status')
                    <span class="text-red-500 text-xs font-medium">{{ $message }}</span>
                @enderror                   
                <div class="modal-action">
                    <button type="submit" class="btn btn-neutral">Create</button>
                    <label for="new_task_modal" class="btn">Close</label>
                </div>
            </form>
        </div>
        <label class="modal-backdrop cursor-pointer" for="new_task_modal">Close</label>
    </div>
</div>