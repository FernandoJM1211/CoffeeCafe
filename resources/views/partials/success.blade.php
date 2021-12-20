@if (session()->has('success'))
<div class="success flex bg-black bg-opacity-60 fixed inset-0 items-center justify-center">
    <div class="md:w-1/4 p-4 bg-white rounded-lg shadow-lg">
        <div class=" flex flex-col">
        <p class="flex justify-center text-xl mt-4 text-green-600">New menu has been added!</p>
</div>
<div class="flex justify-center text-lg mt-8">
<button class="confirmsuccess bg-blue-600 px-4 py-1 rounded-md text-white hover:bg-white border hover:border-blue-600 hover:text-blue-600">Confirm</button>
</div>
</div>
</div>

<script>
    const confirmsuccess = document.querySelector('.confirmsuccess');
    const success = document.querySelector('.success');

    confirmsuccess.addEventListener('click', ()=>{
        success.classList.remove('flex')
        success.classList.add('hidden');
    });
</script>
@endif