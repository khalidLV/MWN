<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-3xl font-bold">Update Product</h1>
            </div>
    
            @if(session('success'))
                <div class="alert alert-success mt-3 ml-3 mr-3">
                    {{ session('success') }}
                </div>
            @endif
    
            <div class="card-body">
                <form action="{{ route('Product.update', $product->id) }}" method="post">
                    @csrf
                @method('PUT')
                    <div class="mb-4">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" class="form-control" required>{{ $product->description }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="Price">Price:</label>
                        <input type="number" id="Price" name="Price" class="form-control" value="{{ $product->Price }}" required>
                    </div>
                    
    
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Product</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
