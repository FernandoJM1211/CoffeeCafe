@extends('layouts.user')

@section('container')
@foreach ($users as $user)
    

<div class="flex justify-center mt-36">
    <div class="bg-white md:w-2/3 w-full p-6 rounded-lg">
        <div class="flex mt-3">
            <div class="w-1/2 flex justify-center">
                <p class="font-medium">Username :</p>
                <p class="ml-2">{{ $user->username }}</p>
            </div>
            <div class="w-1/2 flex justify-center">
                <p class="font-medium">Id :</p>
                <p class="ml-2">{{ $user->id }}</p>
            </div>
        </div>
        <div class="flex mt-9">
            <div class="w-1/2 flex justify-center">
                <p><span class="font-medium">Email :</span><br>{{ $user->email }}</p>
            </div>
            <div class="w-1/2 flex justify-center">
                <p><span class="font-medium">Phone :</span><br>{{ $user->phonenumber }}</p>
                
            </div>
        </div>
        <div class="flex justify-around mt-9">
            <button class="px-2 py-1 border border-gray-500 text-gray-500 rounded-md hover:text-blue-500 hover:border-blue-500">Edit Profile</button>
            <button class="px-2 py-1 border border-gray-500 text-gray-500 rounded-md hover:text-blue-500 hover:border-blue-500">Change Password</button>
        </div>
</div>
@endforeach
@endsection