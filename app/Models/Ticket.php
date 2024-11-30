<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ticket extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function dashboard()
    {
        $stats = Ticket::selectRaw("
            COUNT(*) as totalTickets,
            SUM(CASE WHEN estado = 'Asignado' THEN 1 ELSE 0 END) as ticketsAsignados,
            SUM(CASE WHEN estado = 'En Progreso' THEN 1 ELSE 0 END) as ticketsEnProgreso,
            SUM(CASE WHEN estado = 'Cerrado' THEN 1 ELSE 0 END) as ticketsCerrados
        ")->first();
    
        // Inspeccionar los datos
        dd($stats);
    
        return view('index', [
            'ticketsAsignados' => $stats->ticketsAsignados,
            'ticketsEnProgreso' => $stats->ticketsEnProgreso,
            'ticketsCerrados' => $stats->ticketsCerrados,
            'totalTickets' => $stats->totalTickets,
        ]);
    }
}