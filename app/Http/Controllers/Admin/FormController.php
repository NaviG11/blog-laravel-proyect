<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{

    public function create(){
        return view('admin.form.create');
    }

    public function store(Request $request){
        #dd($request->all());
        $form = new Form;
        $form->nombre = $request->input('nombre');
        $form->ci = $request->input('ci');
        $form->email = $request->input('email');
        $form->telefono = $request->input('telefono');
        $form->denunciado = $request->input('denunciado');
        $form->direccion = $request->input('direccion');
        $form->unipolicial = $request->input('unipolicial');
        $form->cargo = $request->input('cargo');
        $form->ciudad = $request->input('ciudad');
        $form->departamento = $request->input('departamento');
        $form->detalle = $request->input('detalle');
        $form->fecha = $request->input('fecha');
        $form->archivo = $request->input('archivo');
        $form->save();
        return 'Completado';
    } 
            
}