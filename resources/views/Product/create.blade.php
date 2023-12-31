<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-3xl font-bold">Create Product</h1>
            </div>
    
            @if(session('success'))
                <div class="alert alert-success mt-3 ml-3 mr-3">
                    {{ session('success') }}
                </div>
            @endif
    
            <div class="card-body">
                <form action="{{ route('Product.store') }}" method="post">
                    @csrf
    
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold">Name:</label>
                        <input type="text" id="name" name="name" class="form-input mt-1 block w-full" required>
                    </div>
    
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-bold">Description:</label>
                        <textarea id="description" name="description" class="form-textarea mt-1 block w-full" required></textarea>
                    </div>
    
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 text-sm font-bold">Price:</label>
                        <input type="number" id="Price" name="Price" class="form-input mt-1 block w-full" required>
                    </div>
                    
    
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Product</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
