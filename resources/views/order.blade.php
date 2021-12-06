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
            <div class="w-1/6 flex justify-center">Detail</div>
            <div class="w-1/6 flex justify-center">Status</div>
        </div>
    </div>
    <div class="table mt-8 p-2 border rounded-md bg-black bg-opacity-40 w-full text-white">
    <div class="flex flex-col divide-y-2">
        <div class="flex flex-row justify-between">
            <div class="w-1/6 flex justify-center items-center">00001</div>
            <div class="w-1/6 flex justify-center items-center">Fernando</div>
            <div class="w-1/6 justify-center hidden md:flex">Espresso 3x <br>Cappucino 2x <br>Arabica 2x</div>
            <div class="w-1/6 justify-center hidden md:flex items-center">12-12-21, 13.00</div>
            <div class="w-1/6 flex justify-center content-start">
                <button class="detail">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 p-1 rounded-lg md:border hover:bg-white hover:border-gray-400 hover:text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg> 
                </button>
            </div>
            <div class="w-1/6 flex justify-center content-start">
            <button class="response">
                <p class="md:border md:p-1 rounded-lg hover:bg-white hover:border-gray-400 hover:text-gray-400">Response</p>
            </button>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
{{-- modal --}}

<div class="modal hidden bg-black bg-opacity-50 absolute inset-0 items-center justify-center">
    <div class="modal md:w-1/4 p-4 bg-white rounded-lg shadow-lg">
    <div class="flex flex-col">
        <div class="flex justify-end">
            <button class="exit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <p class="flex justify-center my-6 text-lg">What do you response?</p>
        <div class="flex justify-between">
            <button class="text-green-500 p-1 px-2 border-green-500 border font-medium rounded-md">
                Accept
            </button>
            <button class="text-red-500 p-1 px-2 border-red-500 border font-medium rounded-md">
                Reject
            </button>
        </div>
    </div>
</div>
</div>

<div class="detailmodal hidden bg-black bg-opacity-50 absolute inset-0 items-center justify-center">
    <div class="w-3/4 md:w-2/5 p-4 bg-white rounded-lg shadow-lg">
    <div class="flex flex-col">
        <div class="flex justify-between text-lg my-2">
            <div class="flex">
                <p class="font-medium">Id :</p>
                <p class="ml-3">00001</p>
            </div>
            <button class="exitdetail">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <div class="flex justify-between my-2">
            <div class="flex">
                <p class="font-medium">Username :</p>
                <p class="ml-3">Fernando</p>
            </div>
            <div class="flex">
                <p class="font-medium hidden md:inline">Time order :</p>
                <p class="ml-3">12-12-21, 13.00</p>
            </div>
        </div>
        <p class="text-lg my-2 font-medium">Orders :</p>
            <div class="flex flex-col w-full my-2">
                <div class="flex justify-between">
                    <div class="w-1/6">Espresso</div>
                    <div class="w-1/6">3x</div>
                    <div class="w-1/6"><span class="mr-1 hidden md:inline">Rp.</span>7.000</div>
                    <div class="w-1/6"><span class="mr-1 hidden md:inline">Rp.</span>21.000</div>
                </div>
                <div class="flex justify-between">
                    <div class="w-1/6">Cappucino</div>
                    <div class="w-1/6">2x</div>
                    <div class="w-1/6"><span class="mr-1 hidden md:inline">Rp.</span>8.000</div>
                    <div class="w-1/6"><span class="mr-1 hidden md:inline">Rp.</span>16.000</div>
                </div>
                <div class="flex justify-between">
                    <div class="w-1/6">Arabica</div>
                    <div class="w-1/6">2x</div>
                    <div class="w-1/6"><span class="mr-1 hidden md:inline">Rp.</span>7.000</div>
                    <div class="w-1/6"><span class="mr-1 hidden md:inline">Rp.</span>14.000</div>
                </div>
    </div>
    <div class="flex justify-between text-xl border-t-2">
        <p>Total :</p>
        <p>Rp. 51.000</p>
    </div>
    </div>
</div>
<script>
    const response = document.querySelector('.response');
    const exit = document.querySelector('.exit');
    const modal = document.querySelector('.modal');

    response.addEventListener('click', ()=>{
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    
    exit.addEventListener('click', ()=>{
        modal.classList.remove('flex');
        modal.classList.add('hidden');
        detailmodal.classList.remove('flex');
        detailmodal.classList.add('hidden');
    });

    const detail = document.querySelector('.detail');
    const exitdetail = document.querySelector('.exitdetail');
    const detailmodal = document.querySelector('.detailmodal');

    detail.addEventListener('click', ()=>{
        detailmodal.classList.remove('hidden');
        detailmodal.classList.add('flex');
    })

    exitdetail.addEventListener('click', ()=>{
        detailmodal.classList.remove('flex');
        detailmodal.classList.add('hidden');
    });

</script>
@endsection