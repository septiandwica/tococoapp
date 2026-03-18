<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::truncate();
        $products = [
            [
                'name' => 'Tococo Chips',
                'tagline' => 'Tropical coconut chips',
                'slug' => 'tococo',
                'description' => 'Experience the tropical taste of Indonesia with our Tococo Chips. Available in Baked and Fried styles with exciting flavors — 100% real coconut, crafted for guilt-free indulgence.',
                'image' => 'product/tococo.png',
                'price' => 25000,
                'gallery' => null,
                'variants' => ['Baked Style', 'Fried Style'],
                'faqs' => [
                    ['q' => 'Are Tococo Chips made from natural ingredients?', 'a' => 'Yes, our chips are made from 100% real coconut harvested from sustainably managed farms.'],
                    ['q' => 'Are these chips gluten-free?', 'a' => 'Absolutely. Tococo Chips are naturally gluten-free and vegan-friendly.'],
                    ['q' => 'What is the difference between Baked and Fried?', 'a' => 'Baked chips are roasted for a light, crunchy texture, while Fried style provides a more traditional savory crispiness.'],
                ],
                'external_links' => [
                    'shopee' => 'https://shopee.co.id/tococochipsofficial',
                    'tiktok' => 'https://www.tiktok.com/@tococoindonesiaofficial'
                ],
                'is_active' => true,
            ],
            [
                'name' => 'ALCOCO',
                'tagline' => 'Premium hot-pressed oil',
                'slug' => 'alcoco',
                'description' => 'Clean-pressed from fresh coconuts for rich aroma and high nutritional value—ideal for cooking and wellness.',
                'image' => 'product/alcoco.png',
                'price' => 85000,
                'gallery' => null,
                'variants' => ['480 ml', '1 L', '5 L'],
                'faqs' => [
                    ['q' => 'Is ALCOCO safe for daily consumption?', 'a' => 'Yes, ALCOCO is high in MCTs and Lauric Acid, which are known to support metabolism and immune health.'],
                    ['q' => 'What makes hot-pressed oil special?', 'a' => 'Our traditional hot-pressed method extracts oil without harsh industrial chemicals, resulting in a cleaner aroma and higher purity.'],
                    ['q' => 'Can I use ALCOCO for skin and hair?', 'a' => 'Certainly. Its natural purity makes it an excellent organic moisturizer for both skin and hair care routines.'],
                ],
                'external_links' => [
                    'shopee' => 'https://shopee.co.id/tococochipsofficial',
                    'tiktok' => 'https://www.tiktok.com/@tococoindonesiaofficial'
                ],
                'is_active' => true,
            ],
            [
                'name' => 'COCOFE',
                'tagline' => 'Healthy coffee blend',
                'slug' => 'cocofe',
                'description' => 'A balanced coffee blend with a subtle coconut profile—smooth caffeine with a clean finish.',
                'image' => 'product/cocofe.JPG',
                'price' => 45000,
                'gallery' => null,
                'variants' => [],
                'faqs' => [
                    ['q' => 'How does the coconut infusion affect the coffee acidity?', 'a' => 'The addition of coconut nectar crystals naturally buffers the coffee acidity, making it gentler on the stomach.'],
                    ['q' => 'Are there any artificial sweeteners?', 'a' => 'No. COCOFE is sweetened naturally with premium coconut nectar, which has a lower glycemic index.'],
                    ['q' => 'Is COCOFE suitable for vegans?', 'a' => 'Yes, COCOFE is 100% plant-based and contains no dairy or animal-derived ingredients.'],
                ],
                'external_links' => [
                    'shopee' => 'https://shopee.co.id/tococochipsofficial',
                    'tiktok' => 'https://www.tiktok.com/@tococoindonesiaofficial'
                ],
                'is_active' => true,
            ],
            [
                'name' => 'COPA',
                'tagline' => 'Guilt-less chocolate',
                'slug' => 'copa',
                'description' => 'Guilt-less chocolate crafted with coconut goodness—rich taste, better macros.',
                'image' => 'product/copa.JPG',
                'price' => 30000,
                'gallery' => null,
                'variants' => [],
                'faqs' => [
                    ['q' => 'Is COPA really low in sugar?', 'a' => 'Yes, we prioritize coconut-based sweeteners to reduce refined sugar content while maintaining a rich chocolate flavor.'],
                    ['q' => 'Is it dairy-free?', 'a' => 'Absolutely. We use coconut excellence to achieve a creamy texture without any dairy inputs, making it 100% vegan.'],
                    ['q' => 'What makes it "guilt-less"?', 'a' => 'With high fiber content and better macros than traditional chocolate, COPA is designed for health-conscious snackers.'],
                ],
                'external_links' => [
                    'shopee' => 'https://shopee.co.id/tococochipsofficial',
                    'tiktok' => 'https://www.tiktok.com/@tococoindonesiaofficial'
                ],
                'is_active' => true,
            ],
        ];

        foreach ($products as $p) {
            Product::create($p);
        }
    }
}
