<?php

namespace App\Livewire\Landing;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.landing')]
class Home extends Component
{
    public function render()
    {
        $products = Product::where('is_active', true)->latest()->take(6)->get();

        return view('livewire.landing.home', compact('products'))
            ->layoutData([
                'title' => 'Tococo Indonesia — Premium Coconut Products from Banyumas',
                'metaDescription' => 'Discover the purity of Indonesian agriculture. From Tococo Chips to ALCOCO Virgin Coconut Oil, we innovate with a zero-waste philosophy for a sustainable future.',
            ]);
    }
}
