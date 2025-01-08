<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-6"> <!-- Mengurangi jarak untuk mendekatkan konten ke header -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Form Pencarian dan Tombol Tambah -->
                    <div class="flex justify-between items-center mb-4">
                        <!-- Form Search -->
                        <form method="GET" action="{{ route('users.index') }}" class="flex items-center space-x-2">
                            <input 
                                type="text" 
                                name="search" 
                                placeholder="Search users..." 
                                value="{{ request('search') }}" 
                                class="border rounded p-2 text-gray-900 dark:text-gray-100 dark:bg-gray-700">
                            <x-primary-button>Cari</x-primary-button>
                        </form>

                        <!-- Tombol Tambah User -->
                        <a href="{{ route('users.create') }}">
                            <x-primary-button>Tambah User</x-primary-button>
                        </a>
                    </div>

                    <!-- Tabel Daftar User -->
                    <table class="table-auto w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700">
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Nama</th>
                                <th class="border px-4 py-2">Email</th>
                                <th class="border px-4 py-2">Role</th>
                                <th class="border px-4 py-2 dark:border-gray-600 w-24">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $user->name }}</td>
                                    <td class="border px-4 py-2">{{ $user->email }}</td>
                                    <td class="border px-4 py-2">{{ $user->getRoleNames()->implode(', ') }}</td>
                                    <td class="border px-4 py-2 flex space-x-2">
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('users.edit', $user->id) }}">
                                            <x-primary-button>Edit</x-primary-button>
                                        </a>

                                        <!-- Form Hapus -->
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>Hapus</x-danger-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>

                    <!-- Modal Konfirmasi Hapus -->
                    <x-modal name="confirm-user-deletion" focusable maxWidth="xl">
                        <form method="post" x-bind:action="action" class="p-6">
                            @method('delete')
                            @csrf
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Apakah anda yakin akan menghapus data ini?') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Setelah proses ini, data akan dihapus secara permanen.') }}
                            </p>
                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">Cancel</x-secondary-button>
                                <x-danger-button class="ml-3">Delete</x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
