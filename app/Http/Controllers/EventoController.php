<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;


class EventoController extends Controller
{
    // Crear un controllador para descargar archivos PDF página principal
    public function index()
    {
        $eventos = Evento::all();
        return view('evento.index', compact('eventos'));
    }
}
