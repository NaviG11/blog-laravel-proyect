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
}
