@extends('layouts.main')

@section('content')
<div class="">
</div>

<form action="{{ route('tickets') }}" method="post">
   @csrf
   <div>
      <h2 class="text-2xl font-semibold">Create a new ticket</h2>
   </div>
   <div>
      <label for="summary">Summary</label>
      <input type="text" id="summary" name="summary" class="w-full bg-gray-100 border-2 rounded-lg @error('summary') border-red-500 @enderror">
      @error('summary')
      <div class="text-red-500">
         {{ $message }}
      </div>
      @enderror
   </div>
   <div>
      <label for="status">Status</label>
      <select id="status" name="status" class="w-full bg-gray-100 border-2 rounded-lg">
         <option value="Incomplete" default>Incomplete</option>
         <option value="In progress">In progress</option>
         <option value="Complete">Complete</option>
      </select>
   </div>
   <div>
      <label for="description">Description</label>
      <input type="text" id="description" name="description" class="w-full bg-gray-100 border-2 rounded-lg @error('description') border-red-500 @enderror">
      @error('description')
      <div class="text-red-500">
         {{ $message }}
      </div>
      @enderror
   </div>
   <div class="flex gap-3 py-5">
      <button type="submit" class="p-4 text-white bg-blue-600 rounded-lg hover:bg-blue-500">Submit</button>
      <a href=" {{ route('tickets') }}" class="p-4 text-center text-white bg-green-600 rounded-lg hover:bg-green-500">Back</a>
   </div>
</form>


@endsection