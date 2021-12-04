<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffeeku | Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url(images/wooden-table-with-cup-coffee.jpg)" class="bg-cover md:bg-center bg-right-bottom h-screen">
    <div class="container w-4/5 mx-auto h-full">
        <!-- navar -->
        <nav class="flex justify-between md:text-xl text-lg h-14 items-center">
        <div>CoffeeKu</div>
            <!-- desktop nav -->
        
        <div class="hidden md:flex gap-8 text-gray-300">
            <a href="login.html" class="hover:text-white">Login</a>
            <a href="registration.html" class="hover:text-white">Sign Up</a>
        </div>

        <!-- mobile nav -->
        <button class="mobile-menu-button md:hidden block text-gray-300"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
        </svg></button>
        </nav>
        <div class="mobile-menu hidden md:hidden mx-auto gap-1">
            <div class="flex flex-col border-t gap-1">
            <a href="login.php">Login</a>
            <a href="registration.php">Sign up</a> 
            </div>
        </div>
        <!-- contain -->
        <div class="md:h-3/5 md:mt-0 mt-14 flex">
            <div class="my-auto">
                <p class="md:text-4xl text-2xl align-middle">Make a Great Day with a Great Coffee</p>
                <p class="md:text-xl mb-6 mt-6">With both Smooth and Strong Taste <br> You've Never met before</p>
                <button class="border-2 rounded-full py-1 px-4 text-sm md:text-base bg-gray-600 bg-opacity-40 text-white">Get Your Now</button>
                </div>
        </div>

    </div>
    <!-- footer -->
    <div class="flex w-full justify-between footer absolute bottom-0 py-3">
<div class="ml-3 md:text-black text-white">
    <p>Jl. Cipondo Kel. Semanan Kec. Cipondo</p>
</div>
<div class="mr-3 text-white">
    <p>Contact : 08123324158</p>
</div>
    </div>
    <script>
        const btn = document.querySelector('button.mobile-menu-button');
        const menu = document.querySelector('.mobile-menu');

        btn.addEventListener('click', ()=>{
            if(menu.classList.contains('hidden')){
                menu.classList.remove('hidden');
            } else {
                    menu.classList.add('hidden');
                }
            });

    </script>
</body>
</html>