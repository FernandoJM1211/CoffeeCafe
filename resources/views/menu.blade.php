@extends('layouts.admin')

@section('container')
@include('partials.nav')
<div class="content w-4/5 mx-auto">
<div class="content-card mt-16 grid md:grid-cols-2 grid-cols-1 gap-8">

@foreach ($items as $item)
<div class="card bg-opacity-40 bg-black border w-96 p-3 rounded-lg">
    <div class="grid grid-cols-2">
        <img src="/images/{{ $item->image }}" alt="" class="h-40 w-full rounded-l-lg">
        <div class="card-detail bg-white rounded-r-lg px-3 flex flex-col justify-around">
            <p class="text-xl font-serif text-gray-600">{{ $item->title }}</p>
            <p class=" text-lg italic">{{ $item->price }}</p>
            <div class="flex justify-center gap-10 text-gray-600">
                <button class="border px-3 rounded-lg border-gray-500 hover:bg-gray-500 hover:text-white">Edit</button>
                <button class="border px-2 rounded-lg text-white bg-red-500 hover:bg-white hover:text-red-500 hover:border-red-500">Delete</button>
            </div>
        </div>
    </div>
</div>
@endforeach 
</div>
@endsection
</div>