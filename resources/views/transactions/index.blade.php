<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
                    <div class="flex justify-between items-center mb-4">
                        <a href="{{ route('transaction.create') }}">
                            <x-primary-button>Tambah Transaksi</x-primary-button>
                        </a>
                        <form method="GET" action="{{ route('transaction.index') }}" class="flex space-x-2">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari transaksi..." class="border rounded-md px-4 py-2 text-gray-900 dark:text-gray-100 dark:bg-gray-700">
                            <x-primary-button>Cari</x-primary-button>
                        </form>
                    </div>
                    <table class="table-auto w-full text-left border-collapse text-gray-900 dark:text-gray-100">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700">
                                <th class="border px-4 py-2 dark:border-gray-600">ID</th>
                                <th class="border px-4 py-2 dark:border-gray-600">Cabang</th>
                                <th class="border px-4 py-2 dark:border-gray-600">Pegawai</th>
                                <th class="border px-4 py-2 dark:border-gray-600">Total</th>
                                <th class="border px-4 py-2 dark:border-gray-600">Tanggal Transaksi</th>
                                <th class="border px-4 py-2 dark:border-gray-600 w-24">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transactions as $transaction)
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $transaction->id }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $transaction->branch->branch_name ?? 'N/A' }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $transaction->employee->name ?? 'N/A' }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $transaction->total }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600">{{ $transaction->date }}</td>
                                    <td class="border px-4 py-2 dark:border-gray-600 flex space-x-2">
                                        <a href="{{ route('transaction.edit', $transaction->id) }}">
                                            <x-primary-button>Edit</x-primary-button>
                                        </a>
                                        <a href="{{ route('transaction.print', $transaction->id) }}">
                                            <x-primary-button>Print</x-primary-button>
                                        </a>
                                        <form action="{{ route('transaction.destroy', $transaction->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>Delete</x-danger-button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">No transactions found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <a href="{{ route('transaction.printAll') }}" class="mt-4 inline-block">
                        <x-primary-button>Print All Transactions</x-primary-button>
                    </a>

                    <div class="mt-4">
                        {{ $transactions->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
