<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            @if(auth()->check())  <!-- Periksa jika pengguna sudah login -->
                 {{ auth()->user()->getRoleNames()->first() }}  <!-- Menampilkan role pengguna -->
            @endif
        </h2>
    </x-slot>
    <div class="container mx-auto p-6 lg:px-36 pt-16">
        <!-- Statistik Kasir -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Card 1: Total Transaksi Hari Ini -->
            <div class="bg-blue-100 p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg">Total Transaksi Hari Ini</h3>
                <p class="text-3xl font-bold text-blue-600">Rp. 5.000.000</p>
                <a href="#" class="text-blue-500 hover:underline">Lihat Transaksi</a>
            </div>

            <!-- Card 2: Barang Terjual Hari Ini -->
            <div class="bg-green-100 p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg">Barang Terjual Hari Ini</h3>
                <p class="text-3xl font-bold text-green-600">120</p>
                <a href="#" class="text-green-500 hover:underline">Lihat Barang</a>
            </div>

            <!-- Card 3: Total Pengguna -->
            <div class="bg-yellow-100 p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg">Total Pengguna</h3>
                <p class="text-3xl font-bold text-yellow-600">30</p>
                <a href="#" class="text-yellow-500 hover:underline">Lihat Pengguna</a>
            </div>
        </div>

        <!-- Tombol untuk Memulai Transaksi Baru -->
        <div class="flex justify-center mb-8">
            <a href="{{ route('transaction.create') }}" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Mulai Transaksi Baru
            </a>
        </div>

        <!-- Riwayat Transaksi -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-xl mb-4">Riwayat Transaksi</h3>
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Kode Transaksi</th>
                            <th class="px-4 py-2">Tanggal</th>
                            <th class="px-4 py-2">Total Pembelian</th>
                            <th class="px-4 py-2">Kasir</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">TRX12345</td>
                            <td class="px-4 py-2">2025-01-10</td>
                            <td class="px-4 py-2">Rp. 500.000</td>
                            <td class="px-4 py-2">Kasir 1</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500 hover:underline">Detail</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-2">2</td>
                            <td class="px-4 py-2">TRX12346</td>
                            <td class="px-4 py-2">2025-01-10</td>
                            <td class="px-4 py-2">Rp. 250.000</td>
                            <td class="px-4 py-2">Kasir 2</td>
                            <td class="px-4 py-2">
                                <a href="#" class="text-blue-500 hover:underline">Detail</a>
                            </td>
                        </tr>
                        <!-- Tambahkan data transaksi lainnya -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
