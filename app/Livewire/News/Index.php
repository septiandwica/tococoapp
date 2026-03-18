<?php

namespace App\Livewire\News;

use App\Models\Article;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.news')]
class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $articles = Article::where('status', 'published')
            ->with(['category', 'author'])
            ->latest()
            ->paginate(12);

        return view('livewire.news.index', compact('articles'));
    }
}
