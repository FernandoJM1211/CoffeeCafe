@extends('layouts.main')

@section('container')
<div class="table w-full mt-4">
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
</div>
@endsection