<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeeKita | Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url(images/wooden-table-with-cup-coffee.jpg)" class="bg-cover md:bg-center bg-right-bottom h-screen">
    <div class="container w-4/5 mx-auto flex h-full">
    <div class="card m-auto border p-10 rounded-xl text-white bg-black bg-opacity-50 shadow-lg">
        <div class="mb-5 -mt-3 flex justify-end"><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
</svg></a></div>
        <div class="grid md:grid-cols-2 grid-row gap-4">
            <div class="flex flex-col justify-between w-72 md:border-r-2 md:border-b-0 border-b-2 md:pr-4">    
                <p class="text-xl mb-6 md:-mb-4">CoffeeKu</h1>
                <p class="italic text-lg text-center mb-6 md:mb-0">"Make a Great Day <br> with a Great Coffee"</p> 
            <div class="flex justify-between text-sm">
<a href="registration.html">Don't have an account?</a>
<a href="">Forgot password?</a>
            </div>
        </div>
            <div class="flex flex-col justify-between">
                <div>
                <h1 class="mb-2 text-lg flex justify-center">Login Page</h1>
                <form action="" method="post" class="flex flex-col">
                    <label for="username">Username :</label>
                    <input type="text" class="bg-transparent border-b" name="username" id="username" autocomplete="off">
                    <label for="password">Password :</label>
                    <input type="password" class="bg-transparent border-b" name="password" id="password">
    <div class="text-sm italic">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline text-red-600" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
        Username or Password is incorrect</div>
                    <div class="mt-4 flex justify-center">
                <button class="py-1 px-3 border rounded-full hover:bg-white hover:text-gray-600" type="submit" name="login">Login</button>
            </div>
                </form>
            </div>
            
            </div>
        </div>
    </div>
</div>
</body>
</html>