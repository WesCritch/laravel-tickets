@props(['ticket' => $ticket])

<tr class="w-1/4 border-2 border-b-slate-300 odd:bg-neutral-100 even:bg-white">
    <td class="p-3 text-center">{{ $ticket->id }}</td>
    <td class="p-3 text-left">{{ $ticket->summary }}</td>
    <td class="px-4 py-3 text-center">{{ $ticket->status }}</td>

    <td class="">
        <div class="flex justify-center gap-5 ">
            <a href="{{ route('tickets.show', $ticket) }}" class="p-2 text-white bg-blue-600 rounded-lg hover:bg-blue-500">View</a>
            @auth
            <button data-target="#delete-ticket-{{$ticket->id}}" data-toggle="modal" class="p-2 text-white bg-red-600 rounded-lg hover:bg-red-500">Delete</button>
            @endauth
        </div>

    </td>
</tr>