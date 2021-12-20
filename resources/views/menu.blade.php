@extends('layouts.admin')

@section('container')
@include('partials.nav')
<div class="content w-4/5 mx-auto">
<div class="content-card mt-12 grid md:grid-cols-2 grid-cols-1 gap-8">
@foreach ($items as $item)
<div class="card bg-opacity-40 bg-black border w-96 p-3 rounded-lg">
    <div class="grid grid-cols-2">
        <img src="{{ asset('storage/'. $item->image) }}" alt="" class="h-40 w-full rounded-l-lg">
        <div class="card-detail bg-white rounded-r-lg px-3 flex flex-col justify-around">
            <p class="text-xl font-serif text-gray-600">{{ $item->title }}</p>
            <p class=" text-lg italic">{{ $item->price }}</p>
            <div class="flex justify-center gap-10 text-gray-600">
                <button class="edit border px-3 rounded-lg text-white bg-gray-500 hover:bg-white hover:text-gray-500 hover:border-gray-500">Edit</button>
                <button class="deleteconfirm border px-2 rounded-lg text-white bg-red-500 hover:bg-white hover:text-red-500 hover:border-red-500">Delete</button>
            </div>
        </div>
    </div>
</div>

{{-- confirm edit --}}
@include('partials.edit')
{{-- confirm delete --}}
@include('partials.delete')
@endforeach 
</div>
{{-- if error --}}
@include('partials.error')

{{-- if successadd --}}
@include('partials.success')

{{-- if successdelete --}}
@include('partials.success2')

{{-- modal --}}
@include('partials.add')

<style>
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
-webkit-appearance: none; 
margin: 0; 
}
</style>
@endsection
</div>