<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Cafe | {{ $title }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url(images/wooden-table-with-cup-coffee.jpg)" class="bg-cover md:bg-center bg-right-bottom h-screen">
    <div class="container w-4/5 mx-auto flex h-full">
    <div class="card w-80 m-auto border p-10 rounded-xl text-white  bg-black bg-opacity-50 shadow-lg">
    <div class="flex justify-between mb-6">
        <p class="text-lg">Create Account</p>
        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg></a>
    </div>
    <form action="/signup" method="post" class="flex flex-col gap-2">
        @csrf
        <label for="username">Username :</label>
        <input oninput="check1()" type="text" name="username" id="username" class="bg-transparent border rounded-full h-7 text-sm pl-3" autocomplete="off" required minlength="4" pattern="[A-Za-z0-9]+" value="{{ old('username') }}">
        @error('username')
            <small class="italic">{{ $message }}</small>
        @enderror
        <small id="warn1" class="text-white italic hidden">Username must be at least 4 characters</small>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" class="bg-transparent border rounded-full h-7 text-sm pl-3" autocomplete="off" required value="{{ old('email') }}">
        @error('email')
            <small class="italic">{{ $message }}</small>
        @enderror
        <label for="phonenumber">Phone Number :</label>
        <input type="number" name="phonenumber" id="phonenumber" class="bg-transparent border rounded-full h-7 text-sm pl-3" autocomplete="off" required value="{{ old('phonenumber') }}">
        <label for="password">Password :</label>
        <input oninput="check2()" type="password" name="password" id="password" class="bg-transparent border rounded-full h-7 text-sm pl-3" autocomplete="off" required minlength="4" pattern="[A-Za-z0-9]+">
        <small id="warn2" class="text-white italic hidden">Password must be at least 4 characters</small>
        <label for="passsword2">Confirm Password :</label>
        <input oninput="check3()" type="password" name="password2" id="password2" class="bg-transparent border rounded-full h-7 text-sm pl-3" autocomplete="off" required pattern="[A-Za-z0-9]+">
        <small id="warn3" class="text-white italic hidden">Password and Confirm Password not match</small>
        <button class="w-2/5 mx-auto h-7 border rounded-full mt-6 hover:bg-white hover:text-gray-600 " type="submit" name="register">Create</button>
    </form>
    </div>
</div>
<script>
    function check1(){
    const warn1 = document.getElementById('warn1');
    const user = document.getElementById('username').value;
    var len = user.length;
    if(len<4){
        warn1.classList.remove('hidden');
    } else {warn1.classList.add('hidden');}
    if(len==0){
            warn1.classList.add('hidden');
        }
    }

    function check2(){
    const warn2 = document.getElementById('warn2');
    const pass = document.getElementById('password').value;
    var len = pass.length;
    if(len<4){
        warn2.classList.remove('hidden');
    } else {warn2.classList.add('hidden');}

    if(len==0){
            warn2.classList.add('hidden');
        }
    }

    function check3(){
        const pass1 = document.getElementById('password').value;
        const pass2 = document.getElementById('password2').value;
        var len = pass2.length;
        if(pass1!=pass2){
        warn3.classList.remove('hidden');  
        } else {warn3.classList.add('hidden');}

        if(len==0){
            warn3.classList.add('hidden');
        }
    }
</script>
<style>
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
-webkit-appearance: none; 
margin: 0; 
}
</style>
</body>
</html>