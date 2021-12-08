@extends('layouts.user')

@section('container')

<div class="table-nav w-full mt-4">
    <div class="flex flex-col p-2 border rounded-md bg-black bg-opacity-40 mb-2">
        <div class="flex flex-row justify-between text-white">
            <div class="w-1/6 flex justify-center">Item</div>
            <div class="w-1/6 flex justify-center">Amount</div>
            <div class="w-1/6 justify-center hidden md:flex">Price</div>
            <div class="w-1/6 flex justify-center">Total</div>
            <div class="w-1/6 flex justify-center">Edit</div>
        </div>
    </div> 

<div class="table mt-8 p-2 border rounded-md bg-black bg-opacity-40 w-full text-white">
    <div class="flex flex-col divide-y-2">
    <div class="flex flex-row justify-between">
        <div class="w-1/6 flex justify-center">Espresso</div>
        <div class="w-1/6 flex justify-center">3</div>
        <div class="w-1/6 justify-center hidden md:flex">Rp. 7.000</div>
        <div class="w-1/6 flex justify-center"><span class="mr-1 hidden md:inline">Rp.</span> 21.000</div>
        <div class="w-1/6 flex flex-row justify-center">
        <button class="px-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-gray-400" viewBox="0 0 20 20" fill="currentColor">
<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
</svg></button>
<p>|</p>
<button class="px-2">
<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-gray-400 " viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
</svg>
</button>
    </div>
    </div>
    </div>
</div>
<div class="flex justify-end mt-2">
<button class="mt-4 border bg-black bg-opacity-50 hover:bg-opacity-20 shadow-lg p-2 rounded-full text-sm text-white">Order now</button>
</div>
@endsection