<?php

namespace App\Livewire\Career;

use App\Models\Job;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.career')]
class JobShow extends Component
{
    public Job $job;

    public function mount($slug)
    {
        $this->job = Job::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.career.job-show');
    }
}
