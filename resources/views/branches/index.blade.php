<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Branches') }}
        </h2>
    </x-slot>

    <div class="py-2"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
                    <div class="flex justify-between items-center mb-4">
                        <div></div>
                        <a href="{{ route('branch.create') }}">
                            <x-primary-button>Tambah Branch</x-primary-button>
                        </a>
                    </div>

                    <table class="table-auto w-full text-left border-collapse text-gray-900 dark:text-gray-100">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700">
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Nama Cabang</th>
                                <th class="border px-4 py-2">Alamat</th>
                                <th class="border px-4 py-2">Role</th>
                                <th class="border px-4 py-2 dark:border-gray-600 w-24">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($branches as $branch)
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $branch->id }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $branch->branch_name }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $branch->address }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $branch->city }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600 flex space-x-2">
                                        <a href="{{ route('branch.edit', $branch->id) }}">
                                            <x-primary-button>Edit</x-primary-button>
                                        </a>
                                        <form action="{{ route('branch.destroy', $branch->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>Delete</x-danger-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $branches->links('pagination::tailwind', ['class' => 'text-gray-900 dark:text-gray-100']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
