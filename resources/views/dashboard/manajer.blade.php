<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-black leading-tight">
                {{ __('Dashboard') }} 
                @if(auth()->check())  <!-- Periksa jika pengguna sudah login -->
                     {{ auth()->user()->getRoleNames()->first() }}  <!-- Menampilkan role pengguna -->
                @endif
            </h2>
        </x-slot>
    
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4"></h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-lg font-semibold">Total Penjualan</h2>
                <p class="text-2xl font-bold mt-2">Rp 15.000.000</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-lg font-semibold">Produk Terjual</h2>
                <p class="text-2xl font-bold mt-2">350</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-lg font-semibold">Stok Tersisa</h2>
                <p class="text-2xl font-bold mt-2">120</p>
            </div>
        </div>

        <div class="mt-6">
            <h2 class="text-xl font-bold mb-2">Daftar Transaksi Terbaru</h2>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 text-left text-sm font-medium">Tanggal</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Pelanggan</th>
                            <th class="px-4 py-2 text-left text-sm font-medium">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">2025-01-08</td>
                            <td class="border px-4 py-2">John Doe</td>
                            <td class="border px-4 py-2">Rp 500.000</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">2025-01-07</td>
                            <td class="border px-4 py-2">Jane Smith</td>
                            <td class="border px-4 py-2">Rp 750.000</td>
                        </tr>
                        <!-- Tambahkan data lainnya -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
