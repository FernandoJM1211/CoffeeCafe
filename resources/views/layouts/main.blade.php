<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeeKita | {{ $title }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url(images/wooden-table-with-cup-coffee.jpg)" class="md:bg-cover bg-center h-screen">
    <div class="relative flex min-h-screen">
        <div class="side-nav md:flex md:flex-col md:w-56 md:bg-white hidden">
            <a href="" class="text-lg my-3 "><span class="ml-3">CoffeeKita</span></a>
            <div class="flex flex-col gap-3 border-t">
            <a href="" class="mt-2 py-1"><span class="ml-3">Profile</span></a>
            <a href="logout.php" class="py-1"><span class="ml-3">Log out</span></a>
            </div>
    <div class="flex flex-col gap-3 border-t mt-3">
    <a href="shop" class="mt-2 py-1"><span class="ml-3 py-1">Shop</span></a>
    <a href="cart" class="py-1"><span class="ml-3 py-1">Cart</span></a>
    <a href="history" class="py-1"><span class="ml-3 py-1">History</span></a>
        </div>
    </div>
    
    <div class="content w-full h-full">
    
    <div class="content w-4/5 mx-auto">
        @yield('container')
    </div>
    </div>
    </div>
</body>
</html>