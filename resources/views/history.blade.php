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

    {{-- modal --}}
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
                <div class="flex flex-col">
                    <p class="font-medium">Time Order :</p>
                    <p>12-12-21, 13.00</p>
                </div>
                <div class="flex flex-col">
                    <p class="font-medium">Time Delivery :</p>
                    <p>12-12-21, 13.15</p>
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
    </div>
    <script>
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