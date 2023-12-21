<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h1>Create Product</h1>
            </div>
    
            @if(session('success'))
                <div class="alert alert-success mt-3 ml-3 mr-3">
                    {{ session('success') }}
                </div>
            @endif
    
            <div class="card-body">
                <form action="{{ route('Product.store') }}" method="post">
                    @csrf
    
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
    
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" class="form-control" required></textarea>
                    </div>
    
                    <div class="form-group">
                        <label for="Price">Price:</label>
                        <input type="number" id="Price" name="Price" class="form-control" required>
                    </div>
    
                    <button type="submit" class="btn btn-primary">Create Product</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
