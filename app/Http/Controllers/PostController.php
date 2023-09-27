<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index()
    {
        if (Cache::has('posts')) {
            $posts = Cache::get('posts');
        } else {
            $posts = Post::where('status', 2)->latest('id')->paginate(8);
            Cache::put('posts', $posts);
        }
        // $posts = Post::where('status', 2)->latest('id')->paginate(8);
        return view('posts.index', compact('posts'));
    }
    public function show(Post $post)
    {
        // Crear una referencia a la política
        $this->authorize('published', $post);
        // return $post;
        $similares = Post::where('category_id', $post->category_id)
            ->where('status', 2)
            ->where('id', '!=', $post->id)
            ->latest('id')
            ->take(4)
            ->get();
        return view('posts.show', compact('post', 'similares'));
    }
    public function category(Category $category)
    {
        // return $category;
        $posts = Post::where('category_id', $category->id)
            ->where('status', 2)
            ->latest('id')
            ->paginate(4);
        return view('posts.category', compact('posts', 'category'));
    }
    public function tag(Tag $tag)
    {
        // return $tag->posts;
        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(4);
        return view('posts.tag', compact('posts', 'tag'));
    }
}
