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
                'ogImage' => $this->resolveImageUrl($this->product->image),
            ])
            ->layout('components.layouts.landing');
    }

    private function resolveImageUrl($image)
    {
        if (!$image) return asset('hero.png');

        if (str_starts_with($image, 'http')) {
            return $image;
        }

        if (file_exists(public_path($image))) {
            return asset($image);
        }

        return \Illuminate\Support\Facades\Storage::url($image);
    }
}
