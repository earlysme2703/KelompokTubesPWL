<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        <div class="max-w-xl">
                            <x-input-label for="name" value="Nama" />
                            <x-text-input id="name" type="text" name="name" class="mt-1 block w-full"
                                value="{{ old('name') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="email" value="Email" />
                            <x-text-input id="email" type="email" name="email" class="mt-1 block w-full"
                                value="{{ old('email') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                    <div class="max-w-xl">
                        <x-input-label for="password" value="Password" />
                        <x-text-input id="password" type="password" name="password" class="mt-1 block w-full" required />
                        <x-input-error class="mt-2" :messages="$errors->get('password')" />
                    </div>
                    <div class="max-w-xl">
                        <x-input-label for="password_confirmation" value="Confirm Password" />
                        <x-text-input id="password_confirmation" type="password" name="password_confirmation" class="mt-1 block w-full" required />
                        <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
                    </div>
                        <div class="max-w-xl">
                            <x-input-label for="role" value="Role" />
                            <select id="role" name="role" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                @foreach ($roles as $role)
                                    @if ($role->name !== 'admin') {{-- Memastikan tidak menampilkan role admin --}}
                                        <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                            {{ ucfirst($role->name) }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>                            
                            <x-input-error class="mt-2" :messages="$errors->get('role')" />
                        </div>

                        <!-- Tombol Simpan -->
                        <div class="flex items-center space-x-4">
                            <x-secondary-button tag="a" href="{{ route('users.index') }}">Cancel</x-secondary-button>
                            <x-primary-button name="save_and_create" value="true">Save & Create Another</x-primary-button>
                            <x-primary-button name="save" value="true">Save</x-primary-button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
