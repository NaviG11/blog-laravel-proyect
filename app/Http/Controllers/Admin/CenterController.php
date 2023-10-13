<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center;
use Illuminate\Support\Facades\Storage;

class CenterController extends Controller
{

    public function index()
    {
        $centros = Center::all();
        $datos['centro']=Center::paginate(5);
        return view('admin.centers.index', compact('centros'));
    }

    public function create()
    {
        return view('admin.centers.create');
    }
    public function store(Request $request)
    {
         $campos=[
            'Nombre'=>'required|string|max:100',
            'Logo'=>'required|max:10000|mimes:jpeg,png,jpg',
            'Descripcion'=>'required|string|max:500',
            'Ubicacion'=>'required|string|max:150',
            'Ciudad'=>'required|string|max:50',
            // 'Telefono'=>'int|max:10',
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


        Center::insert($datosCentros);
        
        //return response()->json($datosCentros);

        return redirect('/admin/centers')->with('mensaje','Centro Agregado con Exito!');
    }
    public function edit($id)
    {
        //
        $centro=Center::findOrFail($id);

        return view ('admin.centers.edit',compact('centro'));
    }
    public function update(Request $request,$id) 
    {
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

            $centro=Center::findOrFail($id);
            Storage::delete('public/'.$centro->Logo );
            $datosCentros['Logo']=$request->file('Logo')->store('uploads','public');
        }


        Center::where('id','=',$id)->update($datosCentros);
        $centro=Center::findOrFail($id);

        return redirect('/admin/centers')->with('mensaje','Centro Modificado Exitosamente!');

       // return view ('centrosLocales.edit',compact('centro'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //


        $centro=Center::findOrFail($id);

        if(Storage::delete('public/'.$centro->Logo)){
            Center::destroy($id);
        }

       
        
        return redirect('/admin/centers')->with('mensaje','Centro Eliminado Exitosamente!');
    }
}
