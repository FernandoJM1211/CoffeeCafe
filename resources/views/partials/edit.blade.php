<div class="editmodal hidden bg-black bg-opacity-60 fixed inset-0 items-center justify-center">
    <div class="md:w-1/4 p-4 bg-white rounded-lg shadow-lg">
    <div class="flex flex-col">
        <div class="flex justify-between my-4 font-medium">
            <p class="text-lg">Edit menu</p>
            <button class="exit2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <form action="/menu/{{ $item->id }}" method="post" class="flex flex-col gap-2">
            @method('put')
            @csrf
            <label for="title">Title :</label>
            <input type="text" name="title" id="title" class="border-2 rounded-md h-7 text-sm pl-3" autocomplete="off" value="{{ old('title', $item->title) }}">
            <label for="image">Image :</label>
            <input type="text" name="image" id="image" class="border-2 rounded-md h-7 text-sm pl-3" autocomplete="off" value="{{ old('image', $item->image) }}">
            <label for="price">price :</label>
            <input type="number" name="price" id="price" class="border-2 rounded-md h-7 text-sm pl-3" autocomplete="off" value="{{ old('price', $item->price) }}">
        <div class="flex justify-center">
            <button type="submit" class="editconfirm mt-6 px-6 py-1 border rounded-md bg-blue-500 text-white hover:bg-white hover:text-blue-500 hover:border-blue-500">
                Edit
            </button>
        </div>
    </form>
    </div>
</div>
</div>

<script>
    const edit = document.querySelector('.edit');
    const editmodal = document.querySelector('.editmodal');

    edit.addEventListener('click', ()=>{
        editmodal.classList.remove('hidden');
        editmodal.classList.add('flex');

        const editconfirm = document.querySelector('.editconfirm');
        const exit2 = document.querySelector('.exit2');

        exit2.addEventListener('click', ()=>{
        editmodal.classList.remove('flex');
        editmodal.classList.add('hidden');
    });

    editconfirm.addEventListener('click', ()=>{
        editmodal.classList.remove('flex');
        editmodal.classList.add('hidden');
    });
    });
</script>