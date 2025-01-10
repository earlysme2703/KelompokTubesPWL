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
        <h1 class="text-2xl font-bold mb-4">Dashboard Kasir</h1>
        <form method="POST" action="{{ route('transaction.store') }}">
            @csrf
            <div class="mb-4">
                <label for="product" class="block">Product</label>
                <input type="text" name="product" id="product" class="form-input w-full">
            </div>
            <div class="mb-4">
                <label for="amount" class="block">Amount</label>
                <input type="number" name="amount" id="amount" class="form-input w-full">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
</x-app-layout>
