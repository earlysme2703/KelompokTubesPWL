<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Transaction Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Form untuk mengedit detail transaksi -->
                    <form action="{{ route('transactionDetail.update', $transactionDetail->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Transaction ID -->
                        <div>
                            <label for="transaction_id" class="block text-sm font-medium text-gray-700">Transaction ID</label>
                            <input type="number" name="transaction_id" id="transaction_id" value="{{ $transactionDetail->transaction_id }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <!-- Product ID -->
                        <div>
                            <label for="product_id" class="block text-sm font-medium text-gray-700">Product ID</label>
                            <input type="number" name="product_id" id="product_id" value="{{ $transactionDetail->product_id }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <!-- Quantity -->
                        <div>
                            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                            <input type="number" name="quantity" id="quantity" value="{{ $transactionDetail->quantity }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <!-- Price -->
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                            <input type="number" name="price" id="price" value="{{ $transactionDetail->price }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <!-- Tombol Simpan -->
                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('transactionDetail.index') }}" class="bg-black text-white px-4 py-2 rounded-md">Cancel</a>
                            <button type="submit" class="bg-black text-white px-4 py-2 rounded-md">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
