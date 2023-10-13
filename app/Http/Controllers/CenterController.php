<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Center;

class CenterController extends Controller
{
    // Crear un controllador para descargar archivos PDF página principal
    public function index()
    {
        $centers = Center::all();
        return view('centers.index', compact('centers'));
    }
}
