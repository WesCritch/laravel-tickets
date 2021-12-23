@extends('layouts.main')

@section('content')
<div class="flex justify-center">
   <div class="w-1/2 p-4 rounded-lg bg-slate-200">
      @if (session('status'))
      <div class="p-2 text-center bg-red-600 rounded-lg">
         {{session('status') }}
      </div>
      @endif
      <form action="{{ route('login') }}" method="post" class="flex flex-col">
         @csrf
         <div class="flex flex-col p-3 ">
            <label for="username">{{ __('Username or Email')}}</label>
            <input id="username" type="text" name="username" placeholder="Your username" class="p-2 @error('username') border-red-500 @enderror border-2" value="{{ old('username') }}">
            @error('username')
            <div class="m-2 text-sm text-red-500">
               <!-- field will be displayed if the name is not entered -->
               {{ $message }}
            </div>
            @enderror
         </div>
         <div class="flex flex-col p-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Choose a password" class="p-2 @error('password') border-red-500 @enderror border-2" value="">
            @error('password')
            <div class="m-2 text-sm text-red-500">
               {{ $message }}
            </div>
            @enderror
         </div>
         <div class="flex justify-center p-3">
            <button type="submit" class="p-2 text-white rounded-lg bg-sky-700 hover:bg-sky-600">Login</button>
         </div>
      </form>

      <hr class="my-4 border-black border-1">

      <h2 class="text-base text-center">In order to create, edit, update and delete tickets you will need to log in.</h2>
      <h3 class="text-base text-center">Don't have an account? Create one <a href="{{ route('register') }}" class="underline hover:decoration-amber-400 hover:text-amber-400">here.</a></h3>

   </div>

</div>
@endsection