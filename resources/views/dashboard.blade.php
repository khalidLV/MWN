<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 relative">
                    <div class="flex items-center justify-center">
                        <p class="text-4xl font-bold mb-4">{{ __("Welcome to my website!") }}</p>
                    </div>
                   
                @php
                $Product = \App\Models\Product::all(); 
                $productCount = $Product->count(); 
                @endphp


                    <span class="absolute top-0 left-0 text-black rounded-full px-2 py-1 text-l">
                        <p class="text-4sm font-bold mb-4"> Total of Product : {{$productCount}} </p>

                    </span>

                    <a href="{{ route('Product.index') }}">
                        <div class="flex items-center justify-center transition-transform transform origin-center hover:scale-105 relative">
                            <img src="https://up6.cc/2022/02/164503212520991.jpg" alt="" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>