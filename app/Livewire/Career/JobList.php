<?php

namespace App\Livewire\Career;

use App\Models\Job;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.career')]
class JobList extends Component
{
    use WithPagination;

    public function render()
    {
        $jobs = Job::where('is_active', true)
            ->latest()
            ->paginate(10);

        return view('livewire.career.job-list', compact('jobs'));
    }
}
