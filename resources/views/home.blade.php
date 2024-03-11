@extends('layouts.app')

@section('content')
    <!-- AD Card 16x9 ratio img -->
    <div class="flex flex-row items-center justify-center sm:px-12 mt-6 border-b">
        <div class="w-5/6 sm:w-full h-48 sm:h-80 overflow-hidden mb-6 ml-4 mr-4">
            <img src="{{ asset('images/samsung-poster.jpg') }}" class="w-full h-full object-cover rounded-lg" alt="promo-img">
        </div>
    </div>

    <!-- Content Header -->
    <div class="flex flex-row items-center justify-center sm:px-12 mt-6 mb-4">
        <h1 class="text-xl sm:text-4xl font-bold text-center">Explore Our Products</h1>
    </div>

    <!-- Search & Filter -->
    @include('components.search-filter')
    
    <!-- Products -->
    <div class="flex flex-row flex-wrap sm:px-12">
        <!-- Foreach Products -->
        <div class="w-full h-auto sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a href="/product/detail">
                <div class="bg-gray-200 text-center rounded-lg m-6 sm:m-2 transition-transform transform hover:scale-105">
                    <img src="{{ asset('images/samsung-s24-ultra.jpg') }}" alt="s24-img"
                        class="px-16 sm:px-8 pt-6 sm:pt-3 mb-2 mx-auto sm:w-3/4">
                    <p class="text-lg sm:text-base md:text-sm">Galaxy S24 Ultra</p>
                    <p class="text-sm text-sky-700">Instock</p>
                    <p class="text-orange-500 pb-6 sm:pb-3">700,000 MMK</p>
                </div>
            </a>
        </div>
        <!-- End Foreach -->
    </div>
@endsection
