@extends('layouts.app')

@section('content')
    <!-- Product Title Bar --> 
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between px-6 sm:px-12 mt-6 border-b">
        <div class="flex flex-col justify-between mb-6 text-left">
            <p class="text-xl font-bold">
                Samsung Galaxy S24 Ultra
            </p>
            <p class="text-sm mt-2 text-sky-500">
                Storage : 256 GB
                <span>|</span>
                Colour : Sky Blue
            </p>
        </div>
        <div class="flex flex-col justify-between mb-6 text-left">
            <p class="text-sm font-bold">
                Price : <span class="underline text-green-500">700,000</span> mmk
            </p>
            <p class="text-sm mt-3">
                Brand : <span class="text-sky-500">Samsung</span>
            </p>
        </div>
    </div>
    
    <!-- Product Info -->
    <div class="flex flex-col sm:flex-row items-center sm:items-start justify-between px-6 sm:px-12 mt-6 text-center sm:text-left">
        <div class="flex flex-row justify-between m-6 text-left sm:w-1/2 h-auto">
            <img src="{{ asset('images/samsung-s24-ultra-detail.jpg') }}" alt="samsung-s24-ultra-detail-img">
        </div>
        <div class="flex flex-col justify-between m-4 text-left sm:w-1/2 h-auto">
            <p class="text-xl font-bold mb-4">
                Device Specification
            </p>
            <p class="text-lg leading-loose">
                <!--Foreach $device->specs as specs-->
                - 6.75 AMOLED Display<br>
                <!--End Foreach-->
                - 120 HZ Refresh Rate<br>
                - Snapdragon 8 GEN 2<br>
                - RAM 12 GB<br>
                - 50 MB Main Camera<br>
                - 5,000 mah Battery<br>
            </p>
            <p class="text-xl font-bold mt-4 sm:mt-8">
                Price
            </p>
            <p class="text-lg">
                <span class="underline italic">700,000</span> MMK
            </p>
        </div>
    </div>
    <div class="flex flex-col sm:flex-row items-center sm:items-start justify-between px-6 sm:px-12 mt-6">
        <div class="flex flex-col justify-between m-6 text-center sm:text-left sm:w-1/2 h-auto">
            <p class="text-xl font-bold px-2">
                Available Colours
            </p>
            <div class="flex mt-2 flex-wrap sm:w-1/2">
                <div class="w-10 h-10 m-2 bg-gray-400 hover:w-11 hover:h-11 hover:m-1"></div>
                <div class="w-10 h-10 m-2 bg-zinc-500 hover:w-11 hover:h-11 hover:m-1"></div>
                <div class="w-10 h-10 m-2 bg-lime-200 hover:w-11 hover:h-11 hover:m-1"></div>
                <div class="w-10 h-10 m-2 bg-pink-200 hover:w-11 hover:h-11 hover:m-1"></div>
            </div>
            <div class="md:flex md:flex-row mt-2">
                <div class="flex flex-col mt-4 items-center lg:w-1/3">
                    <p class="text-xl font-bold px-2">
                        Quantity
                    </p>
                    @include('components.quantity')
                </div>
                <div class="flex flex-col mt-4 items-center lg:w-1/3">
                    <p class="text-xl font-bold px-2 mt-1">
                        Total Price
                    </p>
                    <p class="text-lg px-2 mt-2 underline bg-gray-200 md:ml-2">
                        1,400,000 MMK
                    </p>
                </div>
            </div>
            <!-- Buttons -->
            <div class="flex flex-row justify-between mt-4 lg:w-2/3">
                <div class="md:w-1/2 lg:text-center">
                    <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Cancel</button>
                </div>
                <div class="md:w-1/2 lg:text-center">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between m-6 items-center sm:items-start sm:text-left md:w-1/2 h-auto">
            <p class="text-xl font-bold">
                Description
            </p>
            <p class=" text-sm sm:text-lg text-left leading-loose">
                Discover the Samsung Galaxy S24 Ultra: a pinnacle of innovation. Stunning 6.8-inch Dynamic AMOLED display, professional-grade quad-camera system, and lightning-fast performance. With a sleek design, long-lasting battery, and advanced security features, it's the ultimate smartphone experience. Elevate connectivity with 5G, Wi-Fi 6E, and Bluetooth 5.2. Experience excellence with the Galaxy S24 Ultra.
            </p>
        </div>
    </div>
@endsection
