<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }} 
            @if(auth()->check())  <!-- Periksa jika pengguna sudah login -->
                - {{ auth()->user()->getRoleNames()->first() }}  <!-- Menampilkan role pengguna -->
            @endif
        </h2>
    </x-slot>

    <h1>test</h1>
</x-app-layout>
