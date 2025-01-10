<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <div class="py-2"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-whiteoverflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <a href="{{ route('product.create') }}">
                            <x-primary-button>Tambah Produk</x-primary-button>
                        </a>

                        <form method="GET" action="{{ route('product.index') }}" class="flex items-center space-x-2">
                            <input 
                                type="text" 
                                name="search" 
                                placeholder="  Cari produk.." 
                                value="{{ request('search') }}" 
                                class="border rounded p-1 text-gray-900">
                            <x-primary-button>Cari</x-primary-button>
                        </form>
                    </div>

                    <table class="table-auto w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Nama Produk</th>
                                <th class="border px-4 py-2">Harga</th>
                                <th class="border px-4 py-2">Stok</th>
                                <th class="border px-4 py-2 w-24">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="bg-white">
                                    <td class="border px-4 py-2">{{ $product->id }}</td>
                                    <td class="border px-4 py-2">{{ $product->product_name }}</td>
                                    <td class="border px-4 py-2">{{ $product->price }}</td>
                                    <td class="border px-4 py-2">{{ $product->stock }}</td>
                                    <td class="border px-4 py-2 flex space-x-2">
                                        <a href="{{ route('product.edit', $product->id) }}">
                                            <x-primary-button>Edit</x-primary-button>
                                        </a>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>Hapus</x-danger-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                 
                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
