<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>

    <div class="py-2"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
               
                    <div class="flex justify-between items-center mb-4">
                        
                        <a href="{{ route('employee.create') }}">
                            <x-primary-button>Tambah Pegawai</x-primary-button>
                        </a>

                       
                        <form method="GET" action="{{ route('employee.index') }}" class="flex space-x-2">
                            <select name="branch_id" class="border rounded-md px-7 py-1 text-gray-900 dark:text-gray-100 dark:bg-gray-700">
                                <option value="">Semua Cabang  </option>
                                @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}" {{ $selectedBranch == $branch->id ? 'selected' : '' }}>
                                        {{ $branch->branch_name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-primary-button>Filter</x-primary-button>
                        </form>
                    </div>

                    
                    <table class="table-auto w-full text-left border-collapse text-gray-900 dark:text-gray-100">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700">
                                <th class="border px-4 py-2 dark:border-gray-600">ID</th>
                                <th class="border px-4 py-2 dark:border-gray-600">Nama</th>
                                <th class="border px-4 py-2 dark:border-gray-600">Posisi</th>
                                <th class="border px-4 py-2 dark:border-gray-600">Cabang</th>
                                <th class="border px-4 py-2 dark:border-gray-600 w-24">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($employees as $employee)
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $employee->id }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $employee->name }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $employee->position }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $employee->branch->branch_name }}</td>
                                    <td class="border px-4 py-2 flex justify-center items-center space-x-2">
                                        <a href="{{ route('employee.edit', $employee->id) }}">
                                            <x-primary-button>Edit</x-primary-button>
                                        </a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>Hapus</x-danger-button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4">Tidak ada pegawai yang ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $employees->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
