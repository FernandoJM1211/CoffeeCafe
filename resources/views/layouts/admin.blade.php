<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Cafe | {{ $title }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url(images/wooden-table-with-cup-coffee.jpg)" class="bg-cover md:bg-center bg-right-bottom h-screen bg-no-repeat bg-fixed">
    <div class="relative flex min-h-screen">
        <div class="side-nav md:flex md:flex-col md:w-56 md:bg-white hidden">
            <a href="" class="text-lg my-3"><span class="ml-3">Coffee Cafe</span></a>
            <div class="flex flex-col gap-3 border-t">
            <a href="" class="mt-2 py-1 hover:bg-gray-400"><span class="ml-3">Profile</span></a>
            <a href="logout.php" class="py-1 hover:bg-gray-400"><span class="ml-3">Log out</span></a>
            </div>
    <div class="flex flex-col gap-3 border-t mt-3">
    <a href="menu" class="mt-2 py-1 hover:bg-gray-400"><span class="ml-3 py-1">Menu</span></a>
    <a href="order" class="py-1 hover:bg-gray-400"><span class="ml-3 py-1">Order</span></a>
    <a href="order_history" class="py-1 hover:bg-gray-400"><span class="ml-3 py-1">Order history</span></a>
        </div>
    </div>
    
    <div class="content w-full h-full">
        @yield('container')
    </div>
    </div>
</body>
</html>