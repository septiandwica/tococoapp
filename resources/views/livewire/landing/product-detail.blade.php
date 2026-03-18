<div class="bg-brand-white min-h-screen text-brand-charcoal selection:bg-brand-emerald/10 selection:text-brand-emerald">
    
    @php
        $isChips = str_contains(strtolower($product->slug), 'tococo') || str_contains(strtolower($product->name), 'chips');
        $isAlcoco = str_contains(strtolower($product->slug), 'alcoco');
        $isCocofe = str_contains(strtolower($product->slug), 'cocofe');
        $isCopa = str_contains(strtolower($product->slug), 'copa');
    @endphp
    
    <!-- Navigation Breadcrumbs -->
    <div class="pt-24 pb-8 bg-brand-light/30 border-b border-gray-100">
        <div class="container-tococo">
            <nav class="flex items-center gap-golden-sm text-[10px] font-bold uppercase tracking-[0.2em] text-brand-charcoal/30">
                <a href="{{ route('landing.home') }}" class="hover:text-brand-emerald transition-colors">Home</a>
                <span class="opacity-30">/</span>
                <a href="{{ route('landing.products') }}" class="hover:text-brand-emerald transition-colors">Katalog</a>
                <span class="opacity-30">/</span>
                <span class="text-brand-charcoal">{{ $product->name }}</span>
            </nav>
        </div>
    </div>

    <!-- Product Showcase -->
    <section class="section-golden pt-12 md:pt-golden-xl overflow-hidden">
        <div class="container-tococo">
            <div class="grid lg:grid-cols-2 gap-golden-xl md:gap-24 items-start">
                
                <!-- Gallery Column (Balanced 50%) -->
                <div class="space-y-golden-md">
                    <!-- Main Image (Filling the column) -->
                    <div class="group relative w-full aspect-square rounded-[2rem] overflow-hidden bg-brand-light shadow-xl shadow-brand-emerald/5 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-charcoal/5 to-transparent pointer-events-none"></div>
                        @php
                            $productImage = $product->image ? Storage::url($product->image) : null;
                            if (!$productImage) {
                                $lowName = strtolower($product->name);
                                if (str_contains($lowName, 'chips')) $productImage = asset('product/tococo.png');
                                elseif (str_contains($lowName, 'vco') || str_contains($lowName, 'alcoco')) $productImage = asset('product/alcoco.png');
                                elseif (str_contains($lowName, 'coffee') || str_contains($lowName, 'cocofe')) $productImage = asset('product/cocofe.JPG');
                                elseif (str_contains($lowName, 'fiber') || str_contains($lowName, 'copa')) $productImage = asset('product/copa.JPG');
                            }
                        @endphp
                        @if($productImage)
                            <img src="{{ $productImage }}" alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-brand-charcoal/5 italic font-black text-9xl uppercase tracking-tighter select-none">
                                {{ substr($product->name, 0, 2) }}
                            </div>
                        @endif
                        
                        <!-- Premium Badge -->
                        <div class="absolute top-6 left-6">
                            <span class="px-5 py-2 rounded-full bg-white/90 backdrop-blur-md border border-white/50 text-[9px] font-black uppercase tracking-widest text-brand-emerald shadow-lg">
                                Origin: Banyumas
                            </span>
                        </div>
                    </div>
                    
                    <!-- Gallery Thumbs (Filling the column) -->
                    @if($product->gallery && count($product->gallery) > 1)
                        <div class="grid grid-cols-4 gap-golden-sm w-full">
                            @foreach($product->gallery as $image)
                                <div class="aspect-square rounded-xl overflow-hidden bg-brand-light border border-transparent hover:border-brand-emerald/50 cursor-pointer transition-all hover:scale-105">
                                    <img src="{{ Storage::url($image) }}" alt="Gallery Image" class="w-full h-full object-cover">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <!-- Compact Placeholders -->
                        <div class="grid grid-cols-4 gap-golden-sm w-full opacity-20">
                            @foreach([1,2,3,4] as $i)
                                <div class="aspect-square rounded-xl bg-brand-light/50 border border-dashed border-brand-charcoal/10 flex items-center justify-center text-brand-charcoal/10 italic font-bold text-[10px]">
                                    0{{ $i }}
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Info Column (Balanced 50%) -->
                <div class="space-y-golden-lg animate-reveal">
                    <div class="space-y-golden-sm">
                        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-emerald/5 border border-brand-emerald/10">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-emerald animate-pulse"></span>
                            <span class="text-[9px] font-black uppercase tracking-widest text-brand-emerald">Available for Export</span>
                        </div>
                        <h1 class="golden-h1 text-5xl md:text-6xl uppercase tracking-tighter leading-none">{{ $product->name }}</h1>
                        @if($product->tagline)
                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-brand-emerald/60 mt-2">{{ $product->tagline }}</p>
                        @endif
                    </div>

                    <!-- Expandable Description with Alpine.js -->
                    <div x-data="{ expanded: false }" class="relative">
                        <div 
                            :class="expanded ? 'max-h-[1000px]' : 'max-h-[120px]'"
                            class="overflow-hidden transition-all duration-700 ease-in-out relative"
                        >
                            <div class="space-y-golden-base border-l-2 border-brand-emerald/10 pl-golden-base py-1">
                                <p class="golden-body text-brand-charcoal/70 text-lg leading-[1.8] italic font-serif">
                                    {{ $product->description }}
                                </p>
                            </div>
                            
                            <!-- Fade overlay when collapsed -->
                            <div 
                                x-show="!expanded" 
                                class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-brand-white to-transparent pointer-events-none"
                            ></div>
                        </div>
                        
                        <button 
                            @click="expanded = !expanded"
                            class="mt-4 flex items-center gap-2 text-[10px] font-black uppercase tracking-widest text-brand-emerald hover:text-brand-charcoal transition-colors group"
                        >
                            <span x-text="expanded ? 'Show Less' : 'Read Full Description'"></span>
                            <span :class="expanded ? 'rotate-180' : ''" class="transition-transform duration-500">&darr;</span>
                        </button>
                    </div>

                    <!-- Variant Selection Card -->
                    @if(!$isCocofe && !$isCopa)
                        <div class="p-golden-base rounded-[2rem] bg-brand-light/50 border border-white backdrop-blur-sm space-y-golden-base">
                            @if($isChips)
                                <div x-data="{ 
                                    spec: 'Baked',
                                    flavor: 'Original',
                                    bakedFlavors: {
                                        'Original': 'Pure tropical bliss in every bite — sliced thin and roasted to preserve a natural sweetness and crunchy texture. 100% natural and light.',
                                        'Ginger': 'Feel the tropical crunch with a spicy twist! Tococo Ginger Chips combine the natural sweetness of coconut with the warm, zesty kick of real ginger.',
                                        'Caramel': 'Golden, sweet, and irresistibly crunchy! A perfect harmony of toasted coconut and smooth caramel flavor — a delightful treat in every bite.',
                                        'Cinamon': 'Wake up your senses with a bold coffee flavor blended into crispy coconut chips. Perfect for coffee lovers looking for an energizing snack.'
                                    },
                                    friedFlavors: {
                                        'Original Coconut': 'Feel the refreshing crunch of coconut — soft, savory, and aromatic. The ultimate coconut sensation in every bite.',
                                        'Chocolate': 'A blissful combination of toasted coconut with the smooth, sweet aroma of melted chocolate. A melting delight for all ages.',
                                        'Balado': 'Experience the savory coconut crisp upgraded with a spicy-sweet balado seasoning — a perfect blend for snackers who crave bold flavor.',
                                        'Matcha': 'Indulge in coconut crunch paired with premium matcha — a harmonious balance of earthy freshness and tropical indulgence.'
                                    },
                                    get currentFlavors() {
                                        return this.spec === 'Baked' ? this.bakedFlavors : this.friedFlavors;
                                    },
                                    setSpec(s) {
                                        this.spec = s;
                                        this.flavor = Object.keys(this.currentFlavors)[0];
                                    }
                                }" class="space-y-golden-md">
                                    
                                    <!-- Specification (Baked/Fried) -->
                                    <div class="space-y-golden-sm">
                                        <h4 class="golden-caption text-brand-charcoal/50 text-[9px]">Select Specification</h4>
                                        <div class="flex gap-2">
                                            <template x-for="s in ['Baked', 'Fried']">
                                                <button @click="setSpec(s)" 
                                                        :class="spec === s ? 'bg-brand-emerald text-white border-brand-emerald shadow-lg shadow-brand-emerald/20' : 'bg-white text-brand-charcoal/40 border-gray-100 hover:border-brand-emerald/30'"
                                                        class="px-8 py-3 rounded-full border text-[10px] font-black uppercase tracking-widest transition-all duration-300">
                                                    <span x-text="s"></span>
                                                </button>
                                            </template>
                                        </div>
                                    </div>

                                    <!-- Flavor Variants -->
                                    <div class="space-y-golden-sm">
                                        <h4 class="golden-caption text-brand-charcoal/50 text-[9px]">CHOOSE YOUR VARIANT</h4>
                                        <div class="grid grid-cols-2 gap-2">
                                            <template x-for="f in Object.keys(currentFlavors)">
                                                <button @click="flavor = f" 
                                                        :class="flavor === f ? 'border-brand-emerald bg-white shadow-md' : 'border-transparent bg-white/30 hover:bg-white/60'"
                                                        class="p-4 rounded-2xl border transition-all duration-300 text-left group">
                                                    <span class="block text-[10px] font-black uppercase tracking-tight transition-colors" :class="flavor === f ? 'text-brand-emerald' : 'text-brand-charcoal/40'" x-text="f"></span>
                                                </button>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            @elseif($isAlcoco)
                                <div class="space-y-golden-sm">
                                    <h4 class="golden-caption text-brand-charcoal/50 text-[9px]">Select Specification (Volume)</h4>
                                    <div class="flex flex-wrap gap-golden-sm">
                                        @foreach(['480 ml', '1 L', '5 L'] as $size)
                                            <button class="px-8 py-3 rounded-full border border-gray-100 bg-white text-[10px] font-black uppercase tracking-widest hover:border-brand-emerald hover:text-brand-emerald hover:shadow-lg transition-all group">
                                                {{ $size }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                            @elseif($product->variants && count($product->variants) > 0)
                                <div class="space-y-golden-sm">
                                    <h4 class="golden-caption text-brand-charcoal/50 text-[9px]">Select Specification</h4>
                                    <div class="flex flex-wrap gap-golden-sm">
                                        @foreach($product->variants as $variant)
                                            <button class="px-6 py-2.5 rounded-full border border-gray-200 bg-white text-[10px] font-black uppercase tracking-tighter hover:border-brand-emerald hover:text-brand-emerald hover:shadow-lg transition-all">
                                                {{ $variant }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <div class="space-y-golden-sm">
                                    <h4 class="golden-caption text-brand-charcoal/50 text-[9px]">Request Custom Pack</h4>
                                    <button class="px-6 py-2 rounded-full border border-dashed border-gray-300 bg-white/50 text-[10px] font-bold uppercase tracking-widest text-brand-charcoal/40 hover:border-brand-emerald hover:text-brand-emerald transition-all">
                                        Contact for Bulk Size
                                    </button>
                                </div>
                            @endif
                        </div>
                    @endif

                        <!-- Action Group -->
                        <div class="pt-golden-base space-y-golden-md">
                            <!-- WhatsApp Premium CTA -->
                            <a href="https://wa.me/6281392385176?text=Halo%20Tococo,%20saya%20tertarik%20dengan%20{{ urlencode($product->name) }}" target="_blank" class="btn-tococo-primary w-full py-6 text-xs md:text-sm group flex items-center justify-center gap-4">
                                <span>ORDER VIA WHATSAPP</span>
                                <span class="opacity-50 tracking-normal">&rarr;</span>
                            </a>

                            <!-- Marketplace Grid -->
                            @if($product->external_links)
                                <div class="grid grid-cols-2 gap-3">
                                    @if(isset($product->external_links['shopee']))
                                        <a href="{{ $product->external_links['shopee'] }}" target="_blank" class="flex items-center justify-center gap-2 py-4 rounded-3xl bg-[#EE4D2D] text-white text-[10px] font-black uppercase tracking-widest hover:shadow-xl hover:shadow-[#EE4D2D]/20 transition-all hover:-translate-y-1">
                                            <span>Shopee</span>
                                        </a>
                                    @endif
                                    @if(isset($product->external_links['tiktok']))
                                        <a href="{{ $product->external_links['tiktok'] }}" target="_blank" class="flex items-center justify-center gap-2 py-4 rounded-3xl bg-brand-charcoal text-white text-[10px] font-black uppercase tracking-widest hover:shadow-xl hover:shadow-brand-charcoal/20 transition-all hover:-translate-y-1">
                                            <span>TikTok Shop</span>
                                        </a>
                                    @endif
                                </div>
                            @endif

                            <!-- Trust Badges -->
                            <div class="grid grid-cols-2 gap-golden-sm">
                                <div class="flex flex-col items-center justify-center p-4 rounded-2xl bg-white border border-gray-100 text-center group hover:border-brand-emerald/20 transition-all">
                                    <span class="text-xl mb-1 grayscale group-hover:grayscale-0 transition-all">🌿</span>
                                    <span class="text-[8px] font-black uppercase tracking-[0.2em] opacity-30 group-hover:opacity-100 transition-all">100% Organic</span>
                                </div>
                                <div class="flex flex-col items-center justify-center p-4 rounded-2xl bg-white border border-gray-100 text-center group hover:border-brand-emerald/20 transition-all">
                                    <span class="text-xl mb-1 grayscale group-hover:grayscale-0 transition-all">📦</span>
                                    <span class="text-[8px] font-black uppercase tracking-[0.2em] opacity-30 group-hover:opacity-100 transition-all">Eco Friendly</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Detailed Insights Section -->
    <section class="section-golden pt-12">
        <div class="container-tococo">
            <div class="max-w-5xl mx-auto border-t border-gray-100 pt-golden-xl">
                <div class="grid md:grid-cols-2 gap-golden-xl items-start">
                    
                    <!-- Advanced Specs -->
                    <div class="tococo-card bg-brand-light/20 border-none shadow-none p-golden-lg rounded-[3rem] space-y-golden-md">
                        <h2 class="golden-h3 text-brand-charcoal lowercase italic font-serif">Product Specifications</h2>
                        <div class="space-y-6">
                            <div class="group flex flex-col gap-1 border-b border-brand-charcoal/5 pb-4">
                                <span class="text-[9px] font-black uppercase tracking-[0.2em] text-brand-charcoal/30 group-hover:text-brand-emerald transition-colors">Origin</span>
                                <span class="text-sm font-bold text-brand-charcoal">Banyumas Highland, Indonesia</span>
                            </div>
                            <div class="group flex flex-col gap-1 border-b border-brand-charcoal/5 pb-4">
                                <span class="text-[9px] font-black uppercase tracking-[0.2em] text-brand-charcoal/30 group-hover:text-brand-emerald transition-colors">Processing</span>
                                <span class="text-sm font-bold text-brand-charcoal">Zero-Waste Engineering</span>
                            </div>
                            <div class="group flex flex-col gap-1 border-b border-brand-charcoal/5 pb-4">
                                <span class="text-[9px] font-black uppercase tracking-[0.2em] text-brand-charcoal/30 group-hover:text-brand-emerald transition-colors">Certification</span>
                                <span class="text-sm font-bold text-brand-charcoal">BPOM & Halal Ready</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Showcase -->
                    <div class="space-y-golden-md px-golden-base">
                        <h2 class="golden-h3 text-brand-charcoal lowercase italic font-serif">Frequently Asked Questions</h2>
                        <div class="space-y-4">
                            @if($product->faqs)
                                @foreach($product->faqs as $faq)
                                    <div class="group p-golden-base rounded-2xl bg-white border border-gray-100 hover:border-brand-emerald/20 hover:-translate-y-1 transition-all">
                                        <h4 class="text-sm font-black mb-2 flex items-start gap-3">
                                            <span class="text-brand-emerald">Q:</span>
                                            <span class="text-brand-charcoal">{{ $faq['q'] }}</span>
                                        </h4>
                                        <div class="flex items-start gap-3 pl-7">
                                            <p class="text-[11px] text-brand-charcoal/60 leading-relaxed font-medium">
                                                {{ $faq['a'] }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="p-golden-base rounded-2xl bg-white border border-gray-100 border-dashed text-center">
                                    <h4 class="text-xs font-black mb-1 opacity-40">More Information coming soon</h4>
                                    <p class="text-[10px] text-brand-charcoal/30">Connect with our support team.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@push('meta')
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "{{ $product->name }}",
  "image": [
    "{{ $ogImage ?? asset('hero.png') }}"
  ],
  "description": "{{ $product->description }}",
  "sku": "{{ $product->slug }}",
  "brand": {
    "@type": "Brand",
    "name": "Tococo Indonesia"
  },
  "offers": {
    "@type": "Offer",
    "url": "{{ url()->current() }}",
    "priceCurrency": "IDR",
    "price": "0",
    "availability": "https://schema.org/InStock",
    "seller": {
        "@type": "Organization",
        "name": "Tococo Indonesia"
    }
  }
}
</script>
@endpush
