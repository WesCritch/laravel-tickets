<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\TicketUpdateRequest;

class TicketController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //This function allows me to delete tickets without being logged in

    public function authorize($ability, $arguments = []) {
        return true;
    }

    public function index() {
        $tickets = Ticket::latest()->paginate(5);

        return view('tickets.index', [
            'tickets' => $tickets,
        ]);
    }

    public function create() {
        return view('tickets.create');
    }

    public function store(TicketUpdateRequest $request) {

        Ticket::create([
            'id' => $request->id,
            'summary' => $request->summary,
            'status' => $request->status,
            'description' => $request->description
        ]);

        return redirect()->route('tickets');
    }

    public function show(Ticket $ticket) {
        $statuses = Status::get();
        return view('tickets.show', compact(['ticket', 'statuses']));
    }

    public function update(Ticket $ticket, TicketUpdateRequest $request) {

        $ticket->summary = request('summary');
        $ticket->status = request('status');
        $ticket->description = request('description');
        $ticket->save();

        return redirect()->route('tickets')->withSuccess('Ticket ' . $ticket->id . ' has been updated');
    }


    public function destroy(Ticket $ticket) {
        $this->authorize('delete', $ticket);
        $ticket->delete();

        return redirect()->route('tickets')->withError('Ticket ' . $ticket->id . ' has been deleted');;
    }

    public function search(Request $request) {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $tickets = Ticket::query()
            ->where('id', 'like', "%{$search}%")
            ->orWhere('summary', 'LIKE', "%{$search}%")
            ->orWhere('status', 'LIKE', "%{$search}%")
            ->get();
        return view('tickets.search', compact('tickets'));
    }
}
