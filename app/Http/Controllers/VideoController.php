<?php


namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
        return view('video.index', compact('videos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('video.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'video_url' => 'required|url|max:255', // Validar que la URL sea válida
            'type' => 'required|string|max:255',
        ]);
        //$datosVideo = request()->except('_token');
        Video::insert($validatedData);
        //return response()-> json($validatedData);
        return redirect('/video')->with('mensaje','Video creado Exitosamente!');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        return view('video.show', compact('video'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('video.edit', compact('video'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'video_url' => 'required|url|max:255', // Validar que la URL sea válida
            'type' => 'required|string|max:255',
        ]);
        

        Video::where('id','=',$id)->update($validatedData);
        $centro=Video::findOrFail($id);
        return redirect('/video')->with('mensaje','Video Modificado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(Video $video)
    // {
    //     $video->delete();
    //     return redirect()->route('video.index')->with('info', 'El video se eliminó con éxito');
    //     //
    // }
    public function destroy($id)
    {   
        Video::destroy($id);
        return redirect('video');
        
    }
}
