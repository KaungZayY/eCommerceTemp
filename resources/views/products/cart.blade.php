@extends('layouts.app')

@section('content')
    <!-- Main Content-->
    <div class="sm:py-24 sm:px-24 border">
        <div class="flex flex-col sm:flex-row justify-between h-auto border border-gray-200">
            <!-- Shopping Cart-->
            <div class="flex flex-col w-full sm:w-3/4">
                <div class="flex flex-row justify-between border-b border-gray-300 w-5/6 items-center h-auto py-6 ml-4">
                    <p class="text-xl font-bold">
                        Shopping Cart
                    </p>
                    <p class="font-bold">
                        3 - Items
                    </p>
                </div>
                <div class="flex flex-row mt-6 w-5/6 justify-between font-bold text-xs sm:text-sm ml-4">
                    <p class="sm:w-1/2">
                        PRODUCT DETAIL
                    </p>
                    <p>
                        QUANTITY
                    </p>
                    <p>
                        PRICE
                    </p>
                    <p>
                        TOTAL
                    </p>
                </div>
                <!-- Foreach Items as item-->
                <div class="flex flex-row mt-4 w-5/6 justify-between items-center text-xs sm:text-base ml-4 mb-4 border-b">
                    <div class="flex flex-col w-1/2 mb-2">
                        <img src="{{ asset('images/samsung-s24-ultra.jpg') }}" class="max-w-32 max-h-32" alt="samsung-s24-ultra-detail-img">
                        <p class="mt-2 text-xs text-center sm:text-left">
                            SAMSUNG GALAXY s24 Ultra
                        </p>
                    </div>
                    <div>
                        @include('components.quantity')
                    </div>
                    <p class="text-right">
                        <!--$product->price -->
                        700,000 mmk
                    </p>
                    <p class="text-right">
                        <!-- total price-->
                        700,000 mmk
                    </p>
                </div>
                <!-- Ends Foreach -->
            </div>
            <!-- Order Summary -->
            <div class="text-base flex w-full flex-col sm:w-1/4 mb-2 ml-4 sm:ml-0">
                <div class="flex flex-row border-b border-gray-300 items-center h-auto py-7">
                    <p class="font-bold">
                        Order Summary
                    </p>
                </div>
                <div class="flex flex-row justify-between text-sm mt-6 mr-6 ">
                    <p>
                        ITEMS : 3
                    </p>
                    <p>
                        1,400,000 mmk
                    </p>
                </div>
                <div class="flex flex-row mt-8 mb-4 w-full">
                    <div class="flex flex-col">
                        <p class="text-base font-bold">
                            ADDRESS
                        </p>
                        <input type="text" class="mt-2 border-b border-gray-500 w-full" placeholder="Your Address">
                    </div>
                </div>
                <div class="flex flex-row mt-8 mb-4 w-full">
                    <div class="flex flex-col">
                        <p class="text-base font-bold">
                            PROMO Code
                        </p>
                        <input type="text" class="mt-2 border-b border-gray-500 w-full" placeholder="Promo Code">
                    </div>
                </div>
                <div class="border-b border-gray-300 mt-4">
                    <button class="text-left bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50 mb-4">APPLY</button>
                </div>
                <div class="flex flex-row justify-between text-sm font-bold mt-6 mr-6">
                    <p>
                        TOTAL PRICE :
                        </p>
                    <p>
                        1,400,000
                    </p>
                </div>
                <button class="mt-6 mr-8 sm:mr-2 ml-2 bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">CHECK OUT</button>
            </div>
        </div>
        <div class="flex flex-row">
            <button class="bg-white hover:border-gray-400 border border-transparent text-black font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 flex items-center">
                <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Continue Shopping
            </button>
            
        </div>
    </div>
@endsection
