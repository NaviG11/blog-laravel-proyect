<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    // Crear un controllador para descargar archivos PDF página principal
    public function index()
    {
        $documents = Document::where('status', 1)->get();
        return view('documents.index', compact('documents'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|file|mimes:pdf',
        ]);

        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('pdfs', $filename);

        Document::create([
            'title' => $request->input('title'),
            'filename' => $filename,
        ]);

        return redirect()->route('documents.index')->with('success', 'Documento PDF subido exitosamente.');
    }
}
