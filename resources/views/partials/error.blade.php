@foreach ($errors->all() as $message)
<div class="errormodal flex bg-black bg-opacity-60 fixed inset-0 items-center justify-center">
    <div class="md:w-1/4 p-4 bg-white rounded-lg shadow-lg">
        <div class=" flex flex-col">
            <p class="flex justify-center text-xl mt-4 text-red-600">Failed to add new menu!</p>
        <p class="flex justify-center text-lg mt-4">{{ $message }}</p>
</div>
<div class="flex justify-center text-lg mt-8">
<button class="errorconfirm bg-blue-600 px-4 py-1 rounded-md text-white hover:bg-white border hover:border-blue-600 hover:text-blue-600">Confirm</button>
</div>
</div>
</div>
<script>
    const errormodal = document.querySelector('.errormodal');
    const errorconfirm = document.querySelector('.errorconfirm');
    errorconfirm.addEventListener('click', ()=>{
    errormodal.classList.remove('flex')
    errormodal.classList.add('hidden');
});
</script>
@endforeach