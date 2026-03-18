<?php

namespace App\Livewire\News;

use App\Models\Article;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.news')]
class Show extends Component
{
    public Article $article;

    public function mount($slug)
    {
        $this->article = Article::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.news.show');
    }
}
