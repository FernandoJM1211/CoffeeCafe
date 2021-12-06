@extends('layouts.user')

@section('container')
<div class="content-card mt-20 grid md:grid-cols-2 grid-cols-1 gap-8">

@foreach ($items as $item)
<div class="card bg-opacity-40 bg-black border w-96 p-3 rounded-lg shadow-lg">
    <div class="grid grid-cols-2">
        <img src="/images/{{ $item->image }}" alt="" class="h-40 w-full rounded-l-lg">
        <div class="card-detail bg-white rounded-r-lg px-3 flex flex-col justify-around">
            <div class="flex justify-between text-gray-600">
                <p class="text-xl font-serif text-gray-600">{{ $item->title }}</p>
                <button><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                </svg></button>
            </div>
            <p class=" text-lg italic">{{ $item->price }}</p>
            <div class="flex ">
                <label for="">Amount :</label>
                    <input placeholder="0" type="number" class="w-12 border-2 rounded-md border-gray-600 mx-2 appearance-none text-center">
            </div>
        </div>
    </div>
</div>
@endforeach 
</div>
@endsection

<style>
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
-webkit-appearance: none; 
margin: 0; 
}
</style>