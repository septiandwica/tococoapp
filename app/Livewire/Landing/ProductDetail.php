<?php

namespace App\Livewire\Landing;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;

    public function mount($slug)
    {
        $this->product = Product::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.landing.product-detail')
            ->layoutData([
                'title' => $this->product->name . ' — ' . ($this->product->tagline ?? 'Pure Coconut Excellence') . ' | Tococo',
                'metaDescription' => \Illuminate\Support\Str::limit($this->product->description, 160),
                'ogImage' => $this->product->image ? \Illuminate\Support\Facades\Storage::url($this->product->image) : asset('hero.png'),
            ])
            ->layout('components.layouts.landing');
    }
}
