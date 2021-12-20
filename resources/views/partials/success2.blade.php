@if (session()->has('success2'))
<div class="success2 flex bg-black bg-opacity-60 fixed inset-0 items-center justify-center">
    <div class="md:w-1/4 p-4 bg-white rounded-lg shadow-lg">
        <div class=" flex flex-col">
        <p class="flex justify-center text-xl mt-4">Menu has been deleted</p>
</div>
<div class="flex justify-center text-lg mt-8">
<button class="confirm2 bg-blue-600 px-4 py-1 rounded-md text-white hover:bg-white border hover:border-blue-600 hover:text-blue-600">Confirm</button>
</div>
</div>
</div>
    @endif

    <script>
        const success2 = document.querySelector('.success2');
        const confirm2 = document.querySelector('.confirm2');
    
        confirm2.addEventListener('click', ()=>{
            success2.classList.remove('flex')
            success2.classList.add('hidden');
        });
    </script>