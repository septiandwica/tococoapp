<?php

namespace App\Livewire\Landing;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.landing.about')
            ->layoutData([
                'title' => 'About Tococo — Our Heritage & Zero-Waste Philosophy',
                'metaDescription' => 'PT. Berkah Argo Tococo Indonesia. From Banyumas to the world, learn about our journey, over 100 partner farmers, and our high-tech sustainable coconut processing.',
            ])
            ->layout('components.layouts.landing');
    }
}
