<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Document;
use Livewire\WithPagination;

class DocumentsIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search;
    
    public function render()
    {

        $posts = Document::where('user_id', auth()->user()->id)
            ->latest('id')
            ->paginate();

        return view('livewire.admin.document-index', compact('documents'));
    }
}
