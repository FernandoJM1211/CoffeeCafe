@extends('layouts.main')

@section('container')
<div class="table w-full mt-4">
    <div class="flex flex-row justify-between">
        <div class="flex flex-col">
            <div class="text-lg font-medium mb-2">Items</div>
            <p>Espreso</p>
        </div>
        <div class="flex flex-col">
            <div class="text-lg font-medium mb-2">Quantity</div>
            <p>2</p>
        </div>
        <div class="flex flex-col">
            <div class="text-lg font-medium mb-2">Price</div>
            <p>Rp.4000,00-</p>
        </div>
        <div class="flex flex-col">
            <div class="text-lg font-medium mb-2">Total</div>
            <div>Rp.8.000,00-</div>
        </div>
        <div class="flex flex-col w-1/12">
            <div class="text-lg font-medium mb-2">Edit</div>
            <div class="flex flex-row justify-between">
                <button><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
</svg></button>
<p>|</p>
<button>
<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
</svg>
</button>
            </div>
        </div>
    </div>
</div>
@endsection