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
            <!-- Implementasi Chart Grafik -->
            <div id="grafik-pemasukan" style="height: 300px;"></div>
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
