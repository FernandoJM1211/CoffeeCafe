@extends('layouts.admin')

@section('container')
<div class="content w-4/5 mx-auto">
<div class="table-nav w-full mt-4">
    <div class="flex flex-col p-2 border rounded-md bg-black bg-opacity-40">
        <div class="flex flex-row justify-between text-gray-300">
            <div class="w-1/6 flex justify-center">Id</div>
            <div class="w-1/6 flex justify-center">Username</div>
            <div class="w-1/6 justify-center hidden md:flex">Item</div>
            <div class="w-1/6 justify-center hidden md:flex">Time Order</div>
            <div class="w-1/6 justify-center hidden md:flex">Time Send</div>
            <div class="w-1/6 flex justify-center">Detail</div>
        </div>
    </div>
    <div class="table mt-8 p-2 border rounded-md bg-black bg-opacity-40 w-full text-white">
    <div class="flex flex-col divide-y-2">
        <div class="flex flex-row justify-between">
            <div class="w-1/6 flex justify-center">00001</div>
            <div class="w-1/6 flex justify-center">Fernando</div>
            <div class="w-1/6 justify-center hidden md:flex">Espresso 3x <br>Cappucino 2x <br>Arabica 2x</div>
            <div class="w-1/6 justify-center hidden md:flex">12-12-21, 13.00</div>
            <div class="w-1/6 justify-center hidden md:flex">12-12-21, 13.15</div>
            <div class="w-1/6 flex justify-center content-start">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 p-1 rounded-lg md:border hover:bg-white hover:border-gray-400 hover:text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </button>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection