@extends('layouts.user')

@section('container')
<div class="content-card mt-20 grid md:grid-cols-2 grid-cols-1 gap-8">

@foreach ($items as $item)
<div class="card bg-opacity-40 bg-black border w-96 p-3 rounded-lg shadow-lg">
    <div class="grid grid-cols-2">
        <img src="/images/{{ $item->image }}" alt="" class="h-40 w-full rounded-l-lg">
        <div class="card-detail bg-white rounded-r-lg px-3 flex flex-col justify-around">
            <p class="text-xl font-serif text-gray-600">{{ $item->title }}</p>
            <p class=" text-lg italic">{{ $item->price }}</p>
            <div class="flex justify-between text-gray-600">
                <div class="flex gap-3">
                    <button class="minus border-2 border-grey-600"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg></button>
                    <p class="counter">0</p>
                    <button class="plus border-2 border-grey-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    </button>
                </div>
                <button><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                </svg></button>
            </div>
        </div>
    </div>
</div>
@endforeach 
</div>
@endsection