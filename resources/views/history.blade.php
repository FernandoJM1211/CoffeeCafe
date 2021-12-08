@extends('layouts.user')

@section('container')
<div class="table-nav w-full mt-4">
    <div class="flex flex-col p-2 border rounded-md bg-black bg-opacity-40">
        <div class="flex flex-row justify-between text-white">
            <div class="w-1/6 flex justify-center">Id</div>
            <div class="w-1/6 hidden justify-center md:flex">Items</div>
            <div class="w-1/6 flex justify-center"><span class="mr-1 hidden md:inline">Time</span> Order</div>
            <div class="w-1/6 flex justify-center"><span class="mr-1 hidden md:inline">Time</span> Delivery</div>
            <div class="w-1/6 flex justify-center md:hidden">Detail</div>
        </div>
    </div>
</div>
<div class="table mt-8 p-2 border rounded-md bg-black bg-opacity-40 w-full text-white">
    <div class="flex flex-col divide-y-2">
        <div class="flex flex-row justify-between">
            <div class="w-1/6 flex justify-center items-center">00001</div>
            <div class="w-1/6 justify-center hidden md:flex items-center">
                <div class="flex flex-col 3/4">
                    <div class="flex justify-between">
                        <p>Espresso</p>
                        <p class="ml-2">3x</p>
                    </div>
                    <div class="flex justify-between">
                        <p>Cappucino</p>
                        <p class="ml-2">2x</p>
                    </div>
                    <div class="flex justify-between">
                        <p>Arabica</p>
                        <p class="ml-2">2x</p>
                    </div>
                </div>
            </div>
            <div class="w-1/6 justify-center flex items-center"><span class="mr-1 hidden md:inline">12-12-21,</span>13.00</div>
            <div class="w-1/6 justify-center flex items-center"><span class="mr-1 hidden md:inline">12-12-21,</span>13.15</div>
            <div class="w-1/6 flex justify-center content-start md:hidden">
                <button class="detail">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 p-1 rounded-lg md:border hover:bg-white hover:border-gray-400 hover:text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg> 
                </button>
            </div>
        </div>
    </div>
    </div>
{{-- <div class="table w-full mt-4">
    <div class="flex flex-row justify-between">
        <div class="flex flex-col">
            <div class="text-lg font-medium mb-2">id</div>
            <p>11</p>
        </div>
        <div class="flex w-1/6 flex-col">
        <div class="text-lg font-medium mb-2">Items</div>
        <div class="flex justify-between">
            <p>Espresso</p>
            <p>x3</p>
        </div>
        </div>
        <div class="flex flex-col">
            <div class="text-lg font-medium mb-2">Total</div>
            <p>Rp.12.000,00-</p>
        </div>
        <div class="flex flex-col">
            <div class="text-lg font-medium mb-2">Time Order</div>
            <p>Sunday, 12-11-20, 13.00</p>
        </div>
    </div>
</div> --}}
@endsection