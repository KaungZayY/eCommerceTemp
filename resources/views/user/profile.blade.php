@extends('layouts.app')

@section('content')
    <div class="sm:px-12 sm:py-12 md:px-24 md:py-24">
        <p class="mb-4 ml-2 text-lg sm:text-2xl font-bold">
            Profile Settings
        </p>
        <div class="flex flex-col sm:flex-row flex-wrap items-center sm:items-start sm:justify-between">
            <div class="flex flex-col w-full sm:w-1/2 md:w-1/3 items-center">
                <div class="w-3/4">
                    <img src="{{ asset('images/profile-img.jpg') }}" class="" alt="user-image">
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Edit Image</button>
            </div>            
            <div class="flex flex-col w-full sm:w-1/2 md:w-1/3 items-center mb-8">
                <div class="w-3/4">

                    <p class="text-base font-bold mt-4">
                        Full Name
                    </p>
                    <input type="text" class="mt-2 border-b border-gray-500 w-full" placeholder="Your Name">

                    <p class="text-base font-bold mt-6">
                        User Name
                    </p>
                    <input type="text" class="mt-2 border-b border-gray-500 w-full" placeholder="User Name">

                    <p class="text-base font-bold mt-6">
                        Email
                    </p>
                    <input type="email" class="mt-2 border-b border-gray-500 w-full" placeholder="Your Email">

                    <p class="text-base font-bold mt-6">
                        Address
                    </p>
                    <input type="text" class="mt-2 border-b border-gray-500 w-full" placeholder="Your Address">

                    <p class="text-base font-bold mt-6">
                        Phone Number
                    </p>
                    <input type="text" class="mt-2 border-b border-gray-500 w-full" placeholder="Your Phone No">

                </div>
            </div>
            <div class="flex flex-col w-full sm:w-1/2 md:w-1/3 items-center mt-6">
                <div class="w-3/4">

                    <p class="text-base font-bold mt-4">
                        Password
                    </p>
                    <input type="password" class="mt-2 border-b border-gray-500">

                    <p class="text-base font-bold mt-6">
                        Confirm Password
                    </p>
                    <input type="password" class="mt-2 border-b border-gray-500">

                </div>
            </div>
        </div>
        <!-- Button Section -->
    <div class="flex justify-center sm:justify-end mt-6">
        <button class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded mr-8">Cancel</button>
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Update</button>
    </div>
    </div>
@endsection
