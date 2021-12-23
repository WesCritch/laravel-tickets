@extends('layouts.main')

@section('content')
<main>
   @if($tickets->isNotEmpty())
   <div class="rounded-lg">
      <h1 class="mb-3 text-3xl font-semibold">Tickets</h1>
      <table class="bg-white table-fixed h-[50vh]">
         <thead class="text-white bg-gray-800">
            <tr>
               <th class="w-1/4 px-4 py-3 text-xl font-semibold text-center">Ticket ID</th>
               <th class="w-1/4 px-4 py-3 text-xl font-semibold text-center">Summary</th>
               <th class="w-1/4 px-4 py-3 text-xl font-semibold text-center">Status</th>
               <th class="w-1/4 px-4 py-3 text-xl font-semibold text-center">Actions</th>
            </tr>
         </thead>
         <tbody class="text-gray-700">
            @foreach ($tickets as $ticket)
            <tr class="w-1/4 border-b-2 border-gray-300">
               <td class="p-3 text-center">{{ $ticket->id }}</td>
               <td class="p-3 text-left">{{ $ticket->summary }}</td>
               <td class="px-4 py-3 text-center">{{ $ticket->status }}</td>

               <td class="">
                  <div class="flex justify-center gap-5 ">
                     <a href="{{ route('tickets.show', $ticket) }}" class="p-2 text-white bg-blue-600 rounded-lg hover:bg-blue-500">View</a>
                     <button data-target="#delete-ticket-{{$ticket->id}}" data-toggle="modal" class="p-2 text-white bg-red-600 rounded-lg hover:bg-red-500">Delete</button>
                  </div>

               </td>
            </tr>
            @endforeach
         </tbody>
      </table>

   </div>
   @else
   <div>
      <h1 class="text-3xl font-semibold">No tickets found!</h1>
      <p>It looks like the ticket you searched for was not found. Did you search for the correct thing, or it could have been previously deleted.</p>
   </div>
   @endif
</main>

@endsection