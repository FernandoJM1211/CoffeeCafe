@extends('layouts.admin')

@section('container')
@include('partials.nav')
<div class="content w-4/5 mx-auto">
<div class="content-card mt-12 grid md:grid-cols-2 grid-cols-1 gap-8">
@foreach ($items as $item)
<div class="card bg-opacity-40 bg-black border w-96 p-3 rounded-lg">
    <div class="grid grid-cols-2">
        <img src="/images/{{ $item->image }}" alt="" class="h-40 w-full rounded-l-lg">
        <div class="card-detail bg-white rounded-r-lg px-3 flex flex-col justify-around">
            <p class="text-xl font-serif text-gray-600">{{ $item->title }}</p>
            <p class=" text-lg italic">{{ $item->price }}</p>
            <div class="flex justify-center gap-10 text-gray-600">
                <button class="border px-3 rounded-lg text-white bg-gray-500 hover:bg-white hover:text-gray-500 hover:border-gray-500">Edit</button>
                <button class="border px-2 rounded-lg text-white bg-red-500 hover:bg-white hover:text-red-500 hover:border-red-500">Delete</button>
            </div>
        </div>
    </div>
</div>
@endforeach 
</div>
{{-- modal --}}

<div class="modal hidden bg-black bg-opacity-60 fixed inset-0 items-center justify-center">
    <div class="md:w-1/4 p-4 bg-white rounded-lg shadow-lg">
    <div class="flex flex-col">
        <div class="flex justify-end">
            <button class="exit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <form action="/menu" method="post" class="flex flex-col gap-2">
            @csrf
            <label for="title">Title :</label>
            <input type="text" name="title" id="title" class="border-2 rounded-md h-7 text-sm pl-3" autocomplete="off" value="{{ old('title') }}">
            <label for="image">Image :</label>
            <input type="text" name="image" id="image" class="border-2 rounded-md h-7 text-sm pl-3" autocomplete="off" value="{{ old('image') }}">
            <label for="price">price :</label>
            <input type="number" name="price" id="price" class="border-2 rounded-md h-7 text-sm pl-3" autocomplete="off" value="{{ old('price') }}">
        <div class="flex justify-center">
            <button type="submit" class="add px-2 py-1 border border-gray-500 text-gray-500 rounded-md hover:text-blue-500 hover:border-blue-500">
                Add new menu
            </button>
        </div>
    </form>
    </div>
</div>
</div>

{{-- if success --}}
@if (session()->has('success'))
<div class="success flex bg-black bg-opacity-60 fixed inset-0 items-center justify-center">
    <div class="md:w-1/4 p-4 bg-white rounded-lg shadow-lg">
        <div class=" flex flex-col">
        <p class="flex justify-center text-xl mt-4 text-green-600">New menu has been added!</p>
</div>
<div class="flex justify-center text-lg mt-8">
<button class="confirm bg-blue-600 px-4 py-1 rounded-md text-white hover:bg-white border hover:border-blue-600 hover:text-blue-600">Confirm</button>
</div>
</div>
</div>
    @endif

    {{-- if error --}}
    @foreach ($errors->all() as $message)
    <div class="success flex bg-black bg-opacity-60 fixed inset-0 items-center justify-center">
        <div class="md:w-1/4 p-4 bg-white rounded-lg shadow-lg">
            <div class=" flex flex-col">
                <p class="flex justify-center text-xl mt-4 text-red-600">Failed to add new menu!</p>
            <p class="flex justify-center text-lg mt-4">{{ $message }}</p>
    </div>
    <div class="flex justify-center text-lg mt-8">
    <button class="confirm bg-blue-600 px-4 py-1 rounded-md text-white hover:bg-white border hover:border-blue-600 hover:text-blue-600">Confirm</button>
    </div>
    </div>
    </div>
    @endforeach

<script>
    const addmenu = document.querySelector('.addmenu');
    const exit = document.querySelector('.exit');
    const modal = document.querySelector('.modal');
    const add = document.querySelector('.add');
    const confirm = document.querySelector('.confirm');
    const success = document.querySelector('.success');

    addmenu.addEventListener('click', ()=>{
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    
    exit.addEventListener('click', ()=>{
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    });

    add.addEventListener('click', ()=>{
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    });

    confirm.addEventListener('click', ()=>{
        success.classList.remove('flex')
        success.classList.add('hidden');
    })
</script>

<style>
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
-webkit-appearance: none; 
margin: 0; 
}
</style>
@endsection
</div>