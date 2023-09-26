<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\PostRequest;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {

        // return $request->file('file');
        // En que carpeta dentro de la carpeta storage queremos guardar el archivo
        // return Storage::put('public/posts', $request->file('file'));
        $post = Post::create($request->all());
        if ($request->file('file')) {
            $url = Storage::put('public/posts', $request->file('file'));
            // relación post-image
            $post->image()->create([
                'url' => $url
            ]);
        }
        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }
        return redirect()->route('admin.posts.edit', $post);
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());
        if($request->file('file')){
            $url = Storage::put('posts', $request->file('file'));
            if($post->image){
                Storage::delete($post->image->url);
                $post->image->update([
                    'url' => $url
                ]);
            }else{
                $post->image()->create([
                    'url' => $url
                ]);
            }
        }
        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }
        return redirect()->route('admin.posts.edit', $post)->with('info', 'El post se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('info', 'El post se eliminó con éxito');
    }
}
