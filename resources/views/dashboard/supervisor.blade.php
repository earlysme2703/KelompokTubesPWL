<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Dashboard') }} 
            @if(auth()->check())  <!-- Periksa jika pengguna sudah login -->
                 {{ auth()->user()->getRoleNames()->first() }}  <!-- Menampilkan role pengguna -->
            @endif
        </h2>
    </x-slot>
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Dashboard Supervisor</h1>
        
        <!-- Team Performance -->
        <h2 class="text-xl font-semibold mb-2">Team Performance</h2>
        <ul class="list-disc pl-6 mb-6">
            <li>Kasir 1: 50 transactions</li>
            <li>Kasir 2: 40 transactions</li>
        </ul>
        
        <!-- Stock Alerts -->
        <h2 class="text-xl font-semibold mb-2">Stock Alerts</h2>
        <ul class="list-disc pl-6">
            <li>Product A: Low Stock</li>
            <li>Product B: Out of Stock</li>
        </ul>
    </div>
</x-app-layout>
