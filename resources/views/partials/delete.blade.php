<div class="deletemodal hidden bg-black bg-opacity-60 fixed inset-0 items-center justify-center">
    <div class="md:w-1/4 p-4 bg-white rounded-lg shadow-lg">
        <div class=" flex flex-col">
        <p class="flex justify-center text-lg mt-4 text-center">Are you sure want to delete this menu?</p>
</div>
<div class="flex justify-around text-lg mt-8">
    <form action="/menu/{{ $item->id }}" method="post" class="-mb-0">
        @method('delete')
        @csrf
        <button class="bg-green-600 px-6 py-1 rounded-md text-white hover:bg-white border hover:border-green-600 hover:text-green-600">Yes</button>
    </form>
    <button class="cancel bg-red-600 px-4 py-1 rounded-md text-white hover:bg-white border hover:border-red-600 hover:text-red-600">Cancel</button>
</div>
</div>
</div>

<script>
        const deleteconfirm = document.querySelector('.deleteconfirm');
        const deletemodal = document.querySelector('.deletemodal');
        const cancel = document.querySelector('.cancel');

        deleteconfirm.addEventListener('click', ()=>{
                deletemodal.classList.remove('hidden');
                deletemodal.classList.add('flex');
            });
    
            cancel.addEventListener('click', ()=>{
                deletemodal.classList.remove('flex')
                deletemodal.classList.add('hidden');
        })
</script>

