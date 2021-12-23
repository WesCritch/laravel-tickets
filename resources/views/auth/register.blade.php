@extends('layouts.main')

@section('content')
<div class="flex justify-center">
   <div class="w-1/2 p-4 rounded-lg bg-slate-200">
      <form action="" method="post" class="flex flex-col">
         @csrf
         <div class="flex flex-col p-3">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" placeholder="Your name" class="p-2 @error('name') border-red-500 @enderror border-2" value="{{ old('name') }}">
            @error('name')
            <div class="m-2 text-sm text-red-500">
               <!-- field will be displayed if the name is not entered -->
               {{ $message }}
            </div>
            @enderror
         </div>
         <div class="flex flex-col p-3 ">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" placeholder="Your username" class="p-2 @error('username') border-red-500 @enderror border-2" value="{{ old('username') }}">
            @error('username')
            <div class="m-2 text-sm text-red-500">
               <!-- field will be displayed if the name is not entered -->
               {{ $message }}
            </div>
            @enderror
         </div>
         <div class="flex flex-col p-3">
            <label for="email">Email</label>
            <input id="email" type="text" name="email" placeholder="Your email" class="p-2 @error('email') border-red-500 @enderror border-2" value="{{ old('email') }}">
            @error('email')
            <div class="m-2 text-sm text-red-500">
               <!-- field will be displayed if the name is not entered -->
               {{ $message }}
            </div>
            @enderror
         </div>
         <div class="flex flex-col p-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Choose a password" class="p-2 @error('email') border-red-500 @enderror border-2" value="">
            @error('password')
            <div class="m-2 text-sm text-red-500">
               {{ $message }}
            </div>
            @enderror
         </div>

         <div class="flex flex-col p-3">
            <label for="password_confirmation">Retype password</label>
            <input type="password" name="password_confirmation" id="password-confirmation" placeholder="Re enter password" class="p-2 border-2" value="">
         </div>

         <div class="flex justify-center p-3">
            <button type="submit" class="p-2 text-white rounded-lg bg-sky-700 hover:bg-sky-600">Create user</button>
         </div>
      </form>

      <hr class="my-4 border-black border-1">

      <h3 class="text-base text-center">Already have an account? Login <a href="{{ route('login') }}" class="underline hover:decoration-amber-400 hover:text-amber-400">here.</a></h3>

   </div>

</div>
@endsection