<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
                @if(auth()->check())  <!-- Periksa jika pengguna sudah login -->
                     {{ auth()->user()->getRoleNames()->first() }}  <!-- Menampilkan role pengguna -->
                @endif
            </h2>
        </x-slot>

        <div class="container mx-auto lg:px-36 pt-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Saldo Kas -->
                <div class="p-4 bg-yellow-500 text-white rounded shadow">
                    <h3 class="text-lg font-semibold">Saldo Kas (IDR)</h3>
                    <p class="text-2xl font-bold">Rp 46,236,9600</p>
                    <a href="#" class="text-white">Lihat &rarr;</a>
                </div>

                <!-- Hutang Usaha (AP) -->
                <div class="p-4 bg-red-500 text-white rounded shadow">
                    <h3 class="text-lg font-semibold">Hutang Usaha (AP) (IDR)</h3>
                    <p class="text-2xl font-bold">(Rp 500,000)</p>
                    <a href="#" class="text-white">Lihat &rarr;</a>
                </div>

                <!-- Piutang Usaha (AR) -->
                <div class="p-4 bg-green-500 text-white rounded shadow">
                    <h3 class="text-lg font-semibold">Piutang Usaha (AR) (IDR)</h3>
                    <p class="text-2xl font-bold">Rp 80,400</p>
                    <a href="#" class="text-white">Lihat &rarr;</a>
                </div>

                <!-- Stok Produk -->
                <div class="p-4 bg-purple-500 text-white rounded shadow">
                    <h3 class="text-lg font-semibold">Stok Produk</h3>
                    <p class="text-2xl font-bold">40</p>
                    <a href="#" class="text-white">Lihat &rarr;</a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <!-- Bagan Akun -->
                <div class="p-4 bg-red-200 text-black rounded shadow">
                    <h3 class="text-lg font-semibold">Bagan Akun</h3>
                    <a href="#" class="text-blue-500">Lihat &rarr;</a>
                </div>

                <!-- Jurnal Umum -->
                <div class="p-4 bg-blue-200 text-black rounded shadow">
                    <h3 class="text-lg font-semibold">Jurnal Umum</h3>
                    <a href="#" class="text-blue-500">Lihat &rarr;</a>
                </div>

                <!-- Buku Besar -->
                <div class="p-4 bg-orange-200 text-black rounded shadow">
                    <h3 class="text-lg font-semibold">Buku Besar</h3>
                    <a href="#" class="text-blue-500">Lihat &rarr;</a>
                </div>

                <!-- Neraca -->
                <div class="p-4 bg-green-200 text-black rounded shadow">
                    <h3 class="text-lg font-semibold">Neraca</h3>
                    <a href="#" class="text-blue-500">Lihat &rarr;</a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <!-- Grafik Total Revenue & Modal Tahun Ini -->
                <div class="p-4 bg-purple-300 rounded shadow">
                    <h3 class="text-lg font-semibold">Total Revenue & Modal Tahun Ini (IDR)</h3>
                    <div id="revenue-chart" style="height: 200px;">
                        <!-- Implementasi chart di sini -->
                    </div>
                </div>

                <!-- Grafik Profit Penjualan Tahun Ini -->
                <div class="p-4 bg-green-300 rounded shadow">
                    <h3 class="text-lg font-semibold">Profit Penjualan Tahun Ini (IDR)</h3>
                    <div id="profit-chart" style="height: 200px;">
                        <!-- Implementasi chart di sini -->
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
