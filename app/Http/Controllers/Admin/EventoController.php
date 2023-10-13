<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $eventos = Evento::all();
        $datos['evento']=Evento::paginate(5);
        return view('admin.evento.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.evento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Imagen'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Descripcion'=>'required|string|max:500',
            'Lugar'=>'required|string|max:150',
            'Fecha'=>'required|date',
            // 'Hora'=>'required|Time',
            'Link'=>'required|string|max:500',
            
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Imagen.required'=>'La Imagen es requerida'
        ];

        $this->validate($request,$campos,$mensaje);

        
        $datosEventos = request()->except('_token');

        if($request->hasFile('Imagen')){
            $datosEventos['Imagen']=$request->file('Imagen')->store('uploads','public');
        }


       Evento::insert($datosEventos);
        
       

        return redirect('/admin/evento')->with('mensaje','Evento Agregado con Exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $evento=Evento::findOrFail($id);

        return view ('admin.evento.edit',compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Imagen'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Descripcion'=>'required|string|max:500',
            'Lugar'=>'required|string|max:150',
            'Fecha'=>'required|date',
            // 'Hora'=>'required|Time',
            'Link'=>'required|string|max:500',
          
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            
        ];
        if($request->hasFile('Imagen')){
            $campos=['Imagen'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['Imagen.required'=>'La Imagen es requerida'];
            
        }




        $this->validate($request,$campos,$mensaje);
        //



        $datosEventos = request()->except(['_token','_method']);

        if($request->hasFile('Imagen')){

            $evento=Evento::findOrFail($id);
            Storage::delete('public/'.$evento->Imagen );
            $datosEventos['Imagen']=$request->file('Imagen')->store('uploads','public');
        }


        Evento::where('id','=',$id)->update($datosEventos);
        $evento=Evento::findOrFail($id);

        return redirect('/admin/evento')->with('mensaje','Evento Modificado Exitosamente!');

      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id){
        $evento=Evento::findOrFail($id);
        if(Storage::delete('public/'.$evento->Imagen)){
            Evento::destroy($id);
        }
        return redirect('/admin/evento')->with('mensaje','Evento Eliminado Exitosamente!');
    }
}