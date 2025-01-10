<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            @if(auth()->check())  <!-- Periksa jika pengguna sudah login -->
                 {{ auth()->user()->getRoleNames()->first() }}  <!-- Menampilkan role pengguna -->
            @endif
        </h2>
    </x-slot>
    <div class="container">

        <div class="container mx-auto p-6 lg:px-36 pt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-blue-100 p-6 rounded-lg shadow-md">
                    <h3 class="font-semibold text-lg">Total Stok Barang</h3>
                    <p class="text-3xl font-bold text-blue-600">500</p>
                    <a href="#" class="text-blue-500 hover:underline">Lihat Stok</a>
                </div>

                <div class="bg-yellow-100 p-6 rounded-lg shadow-md">
                    <h3 class="font-semibold text-lg">Barang Hampir Habis</h3>
                    <p class="text-3xl font-bold text-yellow-600">12</p>
                    <a href="#" class="text-yellow-500 hover:underline">Lihat Barang</a>
                </div>

                <div class="bg-red-100 p-6 rounded-lg shadow-md">
                    <h3 class="font-semibold text-lg">Barang Expired</h3>
                    <p class="text-3xl font-bold text-red-600">5</p>
                    <a href="#" class="text-red-500 hover:underline">Lihat Expired</a>
                </div>
            </div>

            <div class="mt-8">
                <div class="bg-green-200 p-6 rounded-lg shadow-md">
                    <h3 class="font-semibold text-xl mb-4">Overview Stok Barang</h3>
                    <div class="relative w-full h-64">
                        <canvas id="stockChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-semibold text-xl mb-4">Daftar Stok Barang</h3>
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full text-left">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2">No</th>
                                    <th class="px-4 py-2">Nama Barang</th>
                                    <th class="px-4 py-2">Kategori</th>
                                    <th class="px-4 py-2">Stok</th>
                                    <th class="px-4 py-2">Harga</th>
                                    <th class="px-4 py-2">Tanggal Expired</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="px-4 py-2">1</td>
                                    <td class="px-4 py-2">Kopi ABC</td>
                                    <td class="px-4 py-2">Minuman</td>
                                    <td class="px-4 py-2">150</td>
                                    <td class="px-4 py-2">Rp. 15.000</td>
                                    <td class="px-4 py-2">2025-12-31</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="px-4 py-2">2</td>
                                    <td class="px-4 py-2">Biskuit XYZ</td>
                                    <td class="px-4 py-2">Makanan</td>
                                    <td class="px-4 py-2">200</td>
                                    <td class="px-4 py-2">Rp. 10.000</td>
                                    <td class="px-4 py-2">2025-06-15</td>
                                </tr>
                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var ctx = document.getElementById('stockChart').getContext('2d');
            var stockChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Kopi ABC', 'Biskuit XYZ', 'Teh PQR', 'Sabun MNO'],
                    datasets: [{
                        label: 'Stok Barang',
                        data: [150, 200, 120, 80],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
</x-app-layout>
