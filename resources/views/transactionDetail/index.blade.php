<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">
            {{ __('Detail Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white  border-b border-gray-200 ">
                    <div class="flex justify-between items-center mb-4">
                        <a href="{{ route('transactionDetail.create') }}">
                            <x-primary-button>Tambah Detail Transaksi</x-primary-button>
                        </a>
                        <form method="GET" action="{{ route('transactionDetail.index') }}" class="flex space-x-2">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari berdasarkan ID" class="border rounded-md px-4 py-2 text-gray-900 dark:text-gray-100 dark:bg-gray-700">
                            <x-primary-button>Cari</x-primary-button>
                        </form>
                    </div>
                    <table class="table-auto w-full text-left border-collapse text-gray-900 ">
                        <thead>
                            <tr class="bg-gray-100 ">
                                <th class="border px-4 py-2 ">ID Transaksi</th>
                                <th class="border px-4 py-2 ">Produk</th>
                                <th class="border px-4 py-2 ">Kuantitas</th>
                                <th class="border px-4 py-2 ">Harga</th>
                                <th class="border px-4 py-2  w-24">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transactionDetails as $detail)
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="border px-4 py-2 ">{{ $detail->transaction_id }}</td>
                                    <td class="border px-4 py-2 ">{{ $detail->product->product_name ?? 'N/A' }}</td>
                                    <td class="border px-4 py-2 ">{{ $detail->quantity }}</td>
                                    <td class="border px-4 py-2 ">{{ number_format($detail->price, 0, ',', '.') }}</td>
                                    <td class="border px-4 py-2  flex space-x-2">
                                        <a href="{{ route('transactionDetail.edit', $detail->id) }}">
                                            <x-primary-button>Edit</x-primary-button>
                                        </a>
                                        <a href="{{ route('transactionDetail.print', $detail->id) }}">
                                            <x-primary-button>Print</x-primary-button>
                                        </a>
                                        <form action="{{ route('transactionDetail.destroy', $detail->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>Delete</x-danger-button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4">No transaction details found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Tombol Print All -->
                    <a href="{{ route('transactionDetail.printAll') }}" class="mt-4 inline-block">
                        <x-primary-button>Print All Details</x-primary-button>
                    </a>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $transactionDetails->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
