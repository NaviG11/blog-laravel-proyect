<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)

    {
        // $article = Article::create($request->all());
        $file = $request->file('file');
        if ($file) {
            $name = $file->getClientOriginalName();
            $path = $file->store('public/documents');
            $array = explode('public/documents', $path);
            $save = new Article;
            $save->name = $name;
            $save->tipo = $request->tipo;
            $save->descripcion = $request->descripcion;
            $save->ambito_aplicacion = $request->ambito_aplicacion;
            $save->path = 'storage/documents' . $array[1];
            $save->save();
            return redirect()->route('admin.articles.edit', $save)->with('info', 'El articulo se creó con éxito');
        } else {
            return redirect()->route('admin.articles.create')
                ->with('error', 'No se ha creado aún el artículo.');
        }
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        //Validación
        $request->validate([
            'name' => 'required',
        ]);
        // Actualizar información
        $article->update($request->all());
        // Redireccionar
        return redirect()->route('admin.articles.edit', $article)->with('info', 'El articulo se actualizó con éxito');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('info', 'El articulo se eliminó con éxito');
    }
}
