<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    // Réinitialise la page lorsque la recherche est mise à jour
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        // Récupère les articles de l'utilisateur authentifié avec pagination
        $posts = Post::where('user_id', auth()->user()->id)
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate();

        return view('livewire.admin.posts-index', compact('posts'));
    }
}
