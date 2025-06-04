<div class="flex justify-center items-center h-screen">
    <div class="card bg-base-100 card-border border-base-300 card-sm overflow-hidden w-sm">
        <div class="border-base-300 border-b border-dashed">
            <div class="flex items-center gap-2 p-4">
                <div class="grow">
                    <div class="flex items-center gap-2 font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 opacity-40">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"></path>
                        </svg>
                        Create an account
                    </div>
                </div>
            </div>
        </div>
        <form class="card-body gap-4" wire:submit.prevent="register">
            @csrf
            <p class="text-xs opacity-60">Registration is free and only takes a minute</p>
            <div class="flex flex-col gap-1">
                <label class="input input-border flex max-w-none items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z"></path>
                    </svg>
                    <input type="text" class="grow" placeholder="Name" name="name" wire:model="name">
                </label>
                @error('name')
                    <span class="text-error text-xs font-medium">{{ $message }}</span>
                @enderror
            </div>
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
                <span class="text-base-content/60 flex items-center gap-2 px-1 text-[0.6875rem]">
                    <span class="status status-error inline-block"></span>
                    Password must be 8+ characters
                </span>
                @error('password')
                    <span class="text-error text-xs font-medium">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-1">
                <label class="input input-border flex max-w-none items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                        <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd"></path>
                    </svg>
                    <input type="password" class="grow" placeholder="Confirm Password" name="password_confirmation" wire:model="password_confirmation">
                </label>
                @error('password_confirmation')
                    <span class="text-error text-xs font-medium">{{ $message }}</span>
                @enderror
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
                <button type="submit" class="btn btn-primary">Register</button>
                <div class="text-sm">
                    or
                    <a href="{{ route('login') }}" wire:navigate class="link text-md">Login</a>
                </div>
            </div>
        </form>
    </div>
</div>