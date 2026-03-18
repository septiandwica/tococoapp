<?php

namespace App\Livewire\Community;

use App\Models\Event;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.community')]
class Dashboard extends Component
{
    public function render()
    {
        $events = Event::latest()->take(5)->get();
        $posts = Post::with('user')->latest()->take(5)->get();

        return view('livewire.community.dashboard', compact('events', 'posts'));
    }
}
