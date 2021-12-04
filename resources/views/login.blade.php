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
    <div class="card m-auto border p-10 rounded-xl text-white bg-black bg-opacity-50">
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
    <small class="text-red-600 italic justify-center font-medium">Username or Password is incorrect</small>
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