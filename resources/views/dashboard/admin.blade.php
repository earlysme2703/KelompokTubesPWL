<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            @if(auth()->check())
                - {{ auth()->user()->getRoleNames()->first() }}
            @endif
        </h2>
    </x-slot>

    <div class="container mx-auto lg:px-36 pt-16">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="p-4 bg-green-100 rounded shadow">
                <h3 class="text-lg font-semibold">Pemasukan Hari Ini</h3>
                <p class="text-green-600">Rp. 0</p>
                <a href="#" class="text-blue-500">More info</a>
            </div>
            <div class="p-4 bg-blue-100 rounded shadow">
                <h3 class="text-lg font-semibold">Pemasukan Bulan Ini</h3>
                <p class="text-blue-600">Rp. 0</p>
                <a href="#" class="text-blue-500">More info</a>
            </div>
            <div class="p-4 bg-orange-100 rounded shadow">
                <h3 class="text-lg font-semibold">Pemasukan Tahun Ini</h3>
                <p class="text-orange-600">Rp. 45,070,000</p>
                <a href="#" class="text-blue-500">More info</a>
            </div>
            <div class="p-4 bg-black text-white rounded shadow">
                <h3 class="text-lg font-semibold">Seluruh Pemasukan</h3>
                <p class="text-white">Rp. 45,070,000</p>
                <a href="#" class="text-blue-500">More info</a>
            </div>
            <div class="p-4 bg-red-100 rounded shadow">
                <h3 class="text-lg font-semibold">Pengeluaran Hari Ini</h3>
                <p class="text-red-600">Rp. 0</p>
                <a href="#" class="text-blue-500">More info</a>
            </div>
            <div class="p-4 bg-red-200 rounded shadow">
                <h3 class="text-lg font-semibold">Pengeluaran Bulan Ini</h3>
                <p class="text-red-600">Rp. 0</p>
                <a href="#" class="text-blue-500">More info</a>
            </div>
            <div class="p-4 bg-red-400 rounded shadow">
                <h3 class="text-lg font-semibold">Pengeluaran Tahun Ini</h3>
                <p class="text-red-600">Rp. 32,850,000</p>
                <a href="#" class="text-blue-500">More info</a>
            </div>
            <div class="p-4 bg-black text-white rounded shadow">
                <h3 class="text-lg font-semibold">Seluruh Pengeluaran</h3>
                <p class="text-white">Rp. 32,850,000</p>
                <a href="#" class="text-blue-500">More info</a>
            </div>
        </div>
        <div class="mt-6">
            <h3 class="text-xl font-semibold">Grafik Pemasukan & Pengeluaran Per Bulan</h3>
            <div id="grafik-pemasukan">
                <!-- Grafik menggunakan SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" viewBox="0 0 500 300">
                    <!-- Gambar Sumbu X dan Y -->
                    <line x1="50" y1="10" x2="50" y2="290" stroke="black" stroke-width="2"/>
                    <line x1="50" y1="290" x2="490" y2="290" stroke="black" stroke-width="2"/>

                    <!-- Grafik Batang Pemasukan -->
                    <rect x="60" y="200" width="50" height="90" fill="green"/>
                    <rect x="120" y="150" width="50" height="140" fill="green"/>
                    <rect x="180" y="120" width="50" height="170" fill="green"/>
                    <rect x="240" y="100" width="50" height="190" fill="green"/>
                    <rect x="300" y="150" width="50" height="140" fill="green"/>
                    <rect x="360" y="180" width="50" height="110" fill="green"/>
                    <rect x="420" y="140" width="50" height="150" fill="green"/>

                    <!-- Grafik Batang Pengeluaran -->
                    <rect x="60" y="230" width="50" height="60" fill="red"/>
                    <rect x="120" y="170" width="50" height="120" fill="red"/>
                    <rect x="180" y="180" width="50" height="110" fill="red"/>
                    <rect x="240" y="210" width="50" height="80" fill="red"/>
                    <rect x="300" y="160" width="50" height="130" fill="red"/>
                    <rect x="360" y="200" width="50" height="90" fill="red"/>
                    <rect x="420" y="190" width="50" height="100" fill="red"/>

                    <!-- Label Bulan -->
                    <div class="container lg:px-40 pt-1">
                        <text x="85" y="295" font-size="12" text-anchor="middle">Jan   </text>
                        <text x="145" y="295" font-size="12" text-anchor="middle">Feb</text>
                        <text x="205" y="295" font-size="12" text-anchor="middle">Mar</text>
                        <text x="265" y="295" font-size="12" text-anchor="middle">Apr</text>
                        <text x="325" y="295" font-size="12" text-anchor="middle">May</text>
                        <text x="385" y="295" font-size="12" text-anchor="middle">Jun</text>
                        <text x="445" y="295" font-size="12" text-anchor="middle">Jul</text>
                    </div>
                </svg>
            </div>
        </div>
        <div class="mt-6">
            <h3 class="text-xl font-semibold">Kalender</h3>
            <!-- Implementasi Kalender -->
            <div id="kalender">
                <p>July 2019</p>
            </div>
        </div>
    </div>
</x-app-layout>
