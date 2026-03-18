<?php

namespace App\Livewire\Landing;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        $products = Product::where('is_active', true)->latest()->get();
        return view('livewire.landing.products', compact('products'))
            ->layoutData([
                'title' => 'Our Products — Sustainable Coconut Innovation | Tococo Indonesia',
                'metaDescription' => 'Explore our range of premium coconut-aligned products: Tococo Chips, ALCOCO Virgin Coconut Oil, COCOFE, and COPA.',
            ])
            ->layout('components.layouts.landing');
    }
}
