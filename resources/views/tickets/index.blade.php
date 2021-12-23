@extends('layouts.main')

@section('content')
<main>
   <div class="rounded-lg">
      <h1 class="mb-3 text-3xl font-semibold">Tickets</h1>
      <section>
         <div>
            <select id="statusSelect" data-column="0" class="filter-select">

               @foreach(App\Models\Status::all() as $status)
               <option value="{{ $status->name }}" placeholder="Select a status">{{ $status->name }}</option>
               @endforeach
            </select>
         </div>
      </section>
      <table class="bg-white table-fixed h-[50vh] ">
         <thead class="text-white bg-gray-800">
            <tr>
               <th class="w-1/4 px-4 py-3 text-xl font-semibold text-center">
                  Ticket ID
               </th>
               <th class="w-1/4 px-4 py-3 text-xl font-semibold text-center">
                  Ticket Summary
               </th>
               <th class="w-1/4 px-4 py-3 text-xl font-semibold text-center">
                  Ticket Status
               </th>
               <th class="w-1/4 px-4 py-3 text-xl font-semibold text-center">Actions</th>
            </tr>
         </thead>
         @if($tickets->count())
         <tbody class="text-gray-700">
            @foreach ($tickets as $ticket)
            <x-ticket :ticket="$ticket" />
            @endforeach
         </tbody>
      </table>
      <div class="py-3">
         {{ $tickets->links() }}
      </div>
      @else
      <p>There are no tickets</p>
      @endif
   </div>

</main>

<!--Modal Box-->
@foreach($tickets as $ticket)
<div id="delete-ticket-{{$ticket->id}}" class="fixed top-0 left-0 z-10 hidden w-full h-full pt-24 overflow-auto bg-black bg-opacity-50">
   <div class="max-w-lg p-4 mx-auto bg-white rounded-lg font-os">
      <form action="{{ route('tickets.destroy', $ticket) }}" method="post" class="text-center">
         @csrf
         @method('DELETE')
         <div class="py-3">
            <h3 class="text-2xl font-semibold">Are you sure you want to delete Ticket {{$ticket->id}}?</h3>
            <p>This cannot be undone.</p>
         </div>
         <div class="flex justify-center gap-3">
            <button type="submit" class="p-2 text-white bg-red-600 rounded-lg hover:bg-red-500">Delete</button>
            <button type="button" class="p-2 text-white bg-green-600 rounded-lg hover:bg-green-500" data-dismiss="modal">Go back</button>
         </div>
      </form>
   </div>
</div>
@endforeach


@endsection