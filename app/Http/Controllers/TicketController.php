<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tickets()
    {
        $items =Ticket::paginate(8);
        return view('modules/tickets/tickets', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules/tickets/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    Log::info('Store method called with request: ', $request->all());
    
    $item = new Ticket();
    $item->asunto = $request->input('asunto');
    $item->asignado_a = $request->input('asignado_a');
    $item->cliente = $request->input('cliente');
    $item->prioridad = $request->input('prioridad');
    $item->estado = $request->input('estado');
    $item->comentarios = $request->input('comentarios');
    $item->save();
    
    return redirect()->route('tickets');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Ticket::find($id);
        return view('modules/tickets/show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Ticket::find($id);
        return view('modules/tickets/edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Ticket::find($id);
        $item->asunto = $request->input('asunto');
        $item->asignado_a = $request->input('asignado_a');
        $item->cliente = $request->input('cliente');
        $item->prioridad = $request->input('prioridad');
        $item->estado = $request->input('estado');
        $item->comentarios = $request->input('comentarios');
        $item->save();
        return to_route('tickets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Ticket::find($id);
        $item->delete();
        return to_route('tickets');
    }
}