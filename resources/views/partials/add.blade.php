<div class="modal hidden bg-black bg-opacity-60 fixed inset-0 items-center justify-center">
    <div class="md:w-1/4 p-4 bg-white rounded-lg shadow-lg">
    <div class="flex flex-col">
        <div class="flex justify-between my-4 font-medium">
            <p class="text-lg">Add new menu</p>
            <button class="exit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <form action="/menu" method="post" class="flex flex-col gap-2" enctype="multipart/form-data">
            @csrf
            <label for="title">Title :</label>
            <input type="text" name="title" id="title" class="border-2 rounded-md h-7 text-sm pl-3" autocomplete="off" value="{{ old('title') }}">
            <label for="image">Image :</label>
            <input type="file" name="image" id="image" class="border-2 rounded-md">
            <label for="price">price :</label>
            <input type="number" name="price" id="price" class="border-2 rounded-md h-7 text-sm pl-3" autocomplete="off" value="{{ old('price') }}">
        <div class="flex justify-center">
            <button type="submit" class="add mt-6 px-2 py-1 rounded-md border bg-blue-500 text-white hover:bg-white hover:text-blue-500 hover:border-blue-500">
                Add new menu
            </button>
        </div>
    </form>
    </div>
</div>
</div>

<script>
    const addmenu = document.querySelector('.addmenu');
    const modal = document.querySelector('.modal');

    addmenu.addEventListener('click', ()=>{
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        const add = document.querySelector('.add');
        const exit = document.querySelector('.exit');

        exit.addEventListener('click', ()=>{
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    });

    add.addEventListener('click', ()=>{
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    });
    });
</script>