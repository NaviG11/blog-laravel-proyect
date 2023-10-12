<?php

namespace App\Http\Controllers;

use App\Models\CentrosLocales;
use Illuminate\Http\Request;

class CentrosLocalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['centros']=CentrosLocales::paginate(5);
        return view ('localCenters.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('localCenters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Logo'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Descripcion'=>'required|string|max:500',
            'Ubicacion'=>'required|string|max:150',
            'Ciudad'=>'required|string|max:50',
            'Telefono'=>'int|max:10',
            'Correo'=>'required|email',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Logo.required'=>'La Imagen es requerida'
        ];

        $this->validate($request,$campos,$mensaje);

        // $datosCentros = request()->all();
        $datosCentros = request()->except('_token');

        if($request->hasFile('Logo')){
            $datosCentros['Logo']=$request->file('Logo')->store('uploads','public');
        }


        CentrosLocales::insert($datosCentros);
        
        //return response()->json($datosCentros);

        return redirect('localCenters')->with('mensaje','Centro Agregado con Exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CentrosLocales $centrosLocales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $centro=CentrosLocales::findOrFail($id);

        return view ('localCenters.edit',compact('centro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $campos=[
            'Nombre'=>'required|string|max:100',
            //'Logo'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Descripcion'=>'required|string|max:500',
            'Ubicacion'=>'required|string|max:150',
            'Ciudad'=>'required|string|max:50',
           // 'Telefono'=>'int|max:10',
            'Correo'=>'required|email',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            
        ];
        /*if($request->hasFile('Logo')){
            $campos=['Logo'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['Logo.required'=>'La Imagen es requerida'];
            
        }*/




        $this->validate($request,$campos,$mensaje);
        //



        $datosCentros = request()->except(['_token','_method']);

        if($request->hasFile('Logo')){

            $centro=CentrosLocales::findOrFail($id);
            Storage::delete('public/'.$centro->Logo );
            $datosCentros['Logo']=$request->file('Logo')->store('uploads','public');
        }


        CentrosLocales::where('id','=',$id)->update($datosCentros);
        $centro=CentrosLocales::findOrFail($id);

        return redirect('localCenters')->with('mensaje','Centro Modificado Exitosamente!');

       // return view ('centrosLocales.edit',compact('centro'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $centro=CentrosLocales::findOrFail($id);

        if(Storage::delete('public/'.$centro->Logo)){
            CentrosLocales::destroy($id);
        }

       
        
        return redirect('localCenters')->with('mensaje','Centro Eliminado Exitosamente!');
    }
}
