<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Law;

class LawController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.laws.index')->only('index');
        $this->middleware('can:admin.laws.create')->only('create', 'store');
        $this->middleware('can:admin.laws.edit')->only('edit', 'update');
        $this->middleware('can:admin.laws.destroy')->only('destroy');
    }

    public function index()
    {
        $laws = Law::all();
        return view('admin.laws.index', compact('laws'));
    }

    public function create()
    {
        return view('admin.laws.create');
    }

    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);

        // return $request->all();
        $law = Law::create($request->all());
        return redirect()->route('admin.laws.edit', $law)->with('info', 'La categoría se creó con éxito');
    }


    public function edit(Law $law)
    {
        return view('admin.laws.edit', compact('law'));
    }

    public function update(Request $request, Law $law)
    {
        //Validación
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:laws,slug,$law->id"
        ]);
        // Actualizar información
        $law->update($request->all());
        // Redireccionar
        return redirect()->route('admin.laws.edit', $law)->with('info', 'La categoría se actualizó con éxito');
    }

    public function destroy(Law $law)
    {
        $category->delete();
        return redirect()->route('admin.laws.index')->with('info', 'La categoría se eliminó con éxito');
    }
}
