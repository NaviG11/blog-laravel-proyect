<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('can:admin.articles.index')->only('index');
        $this->middleware('can:admin.articles.create')->only('create', 'store');
        $this->middleware('can:admin.articles.edit')->only('edit', 'update');
        $this->middleware('can:admin.articles.destroy')->only('destroy');
    }*/

    public function index()
    {
        $articles = Article::all();
        //return $articles;
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);

        // return $request->all();
        $article = Article::create($request->all());
        return redirect()->route('admin.articles.edit', $article)->with('info', 'El articulo se creó con éxito');
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
            'slug' => "required|unique:articles,slug,$article->id"
        ]);
        // Actualizar información
        $category->update($request->all());
        // Redireccionar
        return redirect()->route('admin.articles.edit', $article)->with('info', 'El articulo se actualizó con éxito');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('info', 'El articulo se eliminó con éxito');
    }
}
