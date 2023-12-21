<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <!-- Add your form fields here -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
    
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    
        <!-- Add other form fields as needed -->
    
        <button type="submit">Submit</button>
    </form>
</x-app-layout>