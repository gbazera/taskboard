<div class="flex justify-center items-center h-screen">
    <div class="card bg-base-100 card-border border-base-300 card-sm overflow-hidden w-sm">
        <div class="border-base-300 border-b border-dashed">
            <div class="flex items-center gap-2 p-4">
                <div class="grow">
                    <div class="flex items-center gap-2 font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 opacity-40">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>

                        Login to your account
                    </div>
                </div>
            </div>
        </div>
        <form class="card-body gap-4" wire:submit.prevent="login">
            @csrf
            {{-- <p class="text-xs opacity-60">Registration is free and only takes a minute</p> --}}
            <div class="flex flex-col gap-1">
                <label class="input input-border flex max-w-none items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 opacity-70">
                        <path fill-rule="evenodd" d="M5.404 14.596A6.5 6.5 0 1 1 16.5 10a1.25 1.25 0 0 1-2.5 0 4 4 0 1 0-.571 2.06A2.75 2.75 0 0 0 18 10a8 8 0 1 0-2.343 5.657.75.75 0 0 0-1.06-1.06 6.5 6.5 0 0 1-9.193 0ZM10 7.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z" clip-rule="evenodd" />
                    </svg>
                    <input type="email" class="grow" placeholder="Email" name="email" wire:model="email">
                </label>
                @error('email')
                    <span class="text-error text-xs font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-1">
                <label class="input input-border flex max-w-none items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                        <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd"></path>
                    </svg>
                    <input type="password" class="grow" placeholder="Password" name="password" wire:model="password">
                </label>
                @error('password')
                    <span class="text-error text-xs font-medium">{{ $message }}</span>
                @enderror
                {{-- <span class="text-base-content/60 flex items-center gap-2 px-1 text-[0.6875rem]">
                    <span class="status status-error inline-block"></span>
                    Password must be 8+ characters
                </span> --}}
            </div>
            {{-- <label class="text-base-content/60 flex items-center gap-2 text-xs">
                <input type="checkbox" class="toggle toggle-xs">
                Accept terms without reading
            </label>
            <label class="text-base-content/60 flex items-center gap-2 text-xs">
                <input type="checkbox" class="toggle toggle-xs">
                Subscribe to spam emails
            </label> --}}
            <div class="card-actions items-center">
                <button type="submit" class="btn btn-primary">Login</button>
                <div class="text-sm">
                    or
                    <a href="{{ route('register') }}" wire:navigate class="link text-md">Register</a>
                </div>
            </div>
            @if ($errors->has('credentials'))
                <div class="alert alert-error font-medium">
                    <div  class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>{{ $errors->first() }}</span>
                    </div>
                </div>
                
            @endif
        </form>
    </div>
</div>