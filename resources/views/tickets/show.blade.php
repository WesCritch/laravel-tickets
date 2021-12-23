@extends('layouts.main')

@section('content')
<form method="post">
   @csrf
   <div>
      <h2 class="text-2xl font-semibold">Update ticket {{$ticket->id}}</h2>
   </div>
   <div>
      <label for="summary">Summary</label>
      <input type="text" id="summary" name="summary" value="{{ old('summary', $ticket->summary) }}" class="w-full bg-gray-100 rounded-lg border-2 @error('summary') border-red-500 @enderror" />
      @error('summary')
      <div class="text-red-500">
         {{ $message }}
      </div>
      @enderror
   </div>
   <div>
      <label for="status">Status</label>
      <select id="status" name="status" value="{{ $ticket->status }}" class="w-full bg-gray-100 border-2 rounded-lg">
         @foreach($statuses as $status)
         <option value="{{ $status->name }}" {{ $ticket->status == $status->name ? "selected" : "" }}>{{ $status->name }}</option>
         @endforeach
      </select>
   </div>

   <div>
      <label for="description">Description</label>
      <textarea type="text" id="description" name="description" value="" class="w-full bg-gray-100 border-2 rounded-lg @error('description')border-red-500 @enderror">
      {{ old('description', $ticket->description) }}
      </textarea>
      @error('description')
      <div class="text-red-500">
         {{ $message }}
      </div>
      @enderror
   </div>
   <div class="flex gap-3 py-5">
      @auth
      <button type="submit" class="p-2 text-white bg-blue-600 rounded-lg hover:bg-blue-500">Update</button>
      @endauth
      <a href=" {{ route('tickets') }}" class="p-2 text-center text-white bg-green-600 rounded-lg hover:bg-green-500">Back</a>
   </div>
</form>
@endsection