<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{

    public function index()
    {
        $ficheros = Document::all();
        return view('admin.documents.create', compact('ficheros'));
    }

    public function create()
    {
        $ficheros = Document::all();
        return view('admin.documents.create', compact('ficheros'));
    }
    public function show(Document $document)
    {
        return view('admin.documents.show', compact('document'));
    }
    public function edit(Document $document)
    {
        return view('admin.documents.edit', compact('document'));
    }

    public function store(Request $request)
    {
        $file = $request->file('file');

        if ($file) {
            $name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $path = $file->store('public/documents');
            $array = explode('public/documents', $path);
            $save = new Document;
            $save->name = $name;
            $save->path = 'storage/documents' . $array[1];
            $save->description = 'desctiption';
            $save->file = $extension;
            $save->save();
            return redirect()->route('admin.documents.create')
                ->with('info', 'El documento se creó con éxito');
        } else {
            return redirect()->route('admin.documents.create')
                ->with('error', 'No se ha adjuntado ningún archivo.');
        }
    }

    public function update(Request $request, Document $document)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $document->update($request->all());

        return redirect()->route('admin.documents.edit', compact('document'))
            ->with('info', 'El document se actualizó con éxito');
    }
    public function destroy(Document $document)
    {
        $document->delete();

        return redirect()->route('admin.documents.index')
            ->with('info', 'El document se eliminó con éxito');
    }
}
