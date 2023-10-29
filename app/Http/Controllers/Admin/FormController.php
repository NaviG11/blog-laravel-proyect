<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('admin.form.index', compact('forms'));
    }

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
        
        // Manejar el archivo
        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');
            $nombreArchivo = time() . '_' . $archivo->getClientOriginalName();
            $archivo->storeAs('public/uploads', $nombreArchivo);
            $form->archivo = $nombreArchivo;
        }

        $form->save();
        return 'Completado';
    } 
    public function edit(Form $form)
    {
        return view('admin.form.edit', compact('form'));
    }

    public function update(Request $request, Form $form)
    {
        //Validación
        $request->validate([
            'nombre' => 'required',
        ]);
        // Actualizar información
        $form->update($request->all());
        // Redireccionar
        #return redirect('/admin/forms')->with('mensaje','Evento Modificado Exitosamente!');
        return redirect()->route('admin.form.index', $form)->with('info', 'El formulario se actualizó con éxito');
    }
    public function actualizarEstado(Request $request, $id) {
        // Recupera el modelo correspondiente según el ID
        $form = Form::find($id);
    
        // Actualiza el atributo 'estado' a 'verificado'
        $form->Estado = 'verificado';
        $form->save();
    
        // Redirecciona o realiza cualquier acción necesaria
        return redirect()->route('admin.form.index', $form);
    }
    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('admin.form.index')->with('info', 'El formulario se eliminó con éxito');
    }
            
}