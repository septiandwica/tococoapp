<div class="bg-brand-white min-h-screen text-brand-charcoal selection:bg-brand-emerald/10 selection:text-brand-emerald">
    
    <!-- Hero Section -->
    <section class="section-golden pt-32 pb-16 bg-brand-light relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(#10b981 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="container-tococo relative z-10 text-center max-w-4xl mx-auto animate-reveal">
            <div class="badge-tococo mb-golden-base">
                Premium Collection
            </div>
            <h1 class="golden-h1 mb-golden-md">
                Our <span class="text-brand-emerald italic font-serif lowercase font-normal">Essential</span> Production.
            </h1>
            <p class="golden-body text-xl text-brand-charcoal/60 mx-auto max-w-2xl">
                High-quality coconut-based innovation from Banyumas. Sustainably crafted, ethically sourced, and pure in every essence.
            </p>
        </div>
    </section>

    <!-- Value Proposition -->
    <section class="section-golden bg-brand-white border-b border-gray-100">
        <div class="container-tococo">
            <div class="grid md:grid-cols-3 gap-golden-md">
                <div class="tococo-card text-center space-y-golden-sm">
                    <div class="w-16 h-16 rounded-full bg-brand-emerald/10 text-brand-emerald flex items-center justify-center mx-auto mb-golden-base">
                        <i data-lucide="sprout" class="w-8 h-8"></i>
                    </div>
                    <h3 class="golden-caption text-brand-charcoal">100% Organic</h3>
                    <p class="golden-body text-sm text-brand-charcoal/50">Cultivated without synthetic chemicals, preserving natural purity.</p>
                </div>
                <div class="tococo-card text-center space-y-golden-sm">
                    <div class="w-16 h-16 rounded-full bg-brand-emerald/10 text-brand-emerald flex items-center justify-center mx-auto mb-golden-base">
                        <i data-lucide="globe" class="w-8 h-8"></i>
                    </div>
                    <h3 class="golden-caption text-brand-charcoal">Export Quality</h3>
                    <p class="golden-body text-sm text-brand-charcoal/50">Meeting rigorous international standards for global distribution.</p>
                </div>
                <div class="tococo-card text-center space-y-golden-sm">
                    <div class="w-16 h-16 rounded-full bg-brand-emerald/10 text-brand-emerald flex items-center justify-center mx-auto mb-golden-base">
                        <i data-lucide="recycle" class="w-8 h-8"></i>
                    </div>
                    <h3 class="golden-caption text-brand-charcoal">Zero Waste</h3>
                    <p class="golden-body text-sm text-brand-charcoal/50">Every part of the coconut is utilized, ensuring sustainable production.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalog Grid -->
    <section class="section-golden bg-brand-light">
        <div class="container-tococo">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-golden-base animate-reveal">
                @forelse($products as $product)
                    <a href="{{ route('landing.products.detail', $product->slug) }}" class="group relative aspect-[4/5] rounded-[2.5rem] overflow-hidden bg-brand-light shadow-xl hover:-translate-y-2 transition-all duration-700 animate-reveal">
                        <!-- Product Image -->
                        <div class="absolute inset-0">
                            <img src="{{ asset($product->image ?? 'product/placeholder.png') }}" alt="{{ $product->name }}" class="h-full w-full object-cover transition-transform duration-1000 group-hover:scale-110">
                        </div>

                        <!-- Permanent Text Legibility Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-charcoal/80 via-brand-charcoal/20 to-transparent opacity-60"></div>

                        <!-- Hover Vibrant Overlay -->
                        <div class="absolute inset-0 bg-brand-emerald/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                        <!-- Content Overlay -->
                        <div class="absolute inset-0 p-8 flex flex-col justify-end">
                            <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <span class="inline-block px-3 py-1 rounded-full bg-brand-emerald text-[8px] font-black uppercase tracking-widest text-white mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                                    View Detail
                                </span>
                                <h3 class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white leading-none">
                                    {{ $product->name }}
                                </h3>
                                <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/60 mt-2 block line-clamp-1">
                                    {{ $product->tagline }}
                                </p>
                            </div>
                        </div>

                        <!-- Floating Accent -->
                        <div class="absolute top-6 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 transform scale-50 group-hover:scale-100">
                            <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center text-white">
                                <i data-lucide="arrow-up-right" class="w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                @empty
                    @php
                        $fakeProducts = [
                            ['name' => 'Tococo Chips', 'slug' => 'tococo', 'tagline' => 'Tropical coconut chips', 'image' => 'product/tococo.png'],
                            ['name' => 'ALCOCO', 'slug' => 'alcoco', 'tagline' => 'Premium hot-pressed oil', 'image' => 'product/alcoco.png'],
                            ['name' => 'COCOFE', 'slug' => 'cocofe', 'tagline' => 'Healthy coffee blend', 'image' => 'product/cocofe.JPG'],
                            ['name' => 'COPA', 'slug' => 'copa', 'tagline' => 'Guilt-less chocolate', 'image' => 'product/copa.JPG'],
                        ];
                    @endphp
                    @foreach($fakeProducts as $p)
                        <a href="{{ route('landing.products.detail', $p['slug']) }}" class="group relative aspect-[4/5] rounded-[2.5rem] overflow-hidden bg-brand-light shadow-xl hover:-translate-y-2 transition-all duration-700">
                            <div class="absolute inset-0">
                                <img src="{{ asset($p['image']) }}" alt="{{ $p['name'] }}" class="h-full w-full object-cover transition-transform duration-1000 group-hover:scale-110">
                            </div>
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-charcoal/80 via-brand-charcoal/20 to-transparent opacity-60"></div>
                            <div class="absolute inset-0 bg-brand-emerald/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                            <div class="absolute inset-0 p-8 flex flex-col justify-end">
                                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <span class="inline-block px-3 py-1 rounded-full bg-brand-emerald text-[8px] font-black uppercase tracking-widest text-white mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                                        View Detail
                                    </span>
                                    <h3 class="text-2xl md:text-3xl font-black uppercase tracking-tighter text-white leading-none">
                                        {{ $p['name'] }}
                                    </h3>
                                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/60 mt-2 block">
                                        {{ $p['tagline'] }}
                                    </p>
                                </div>
                            </div>

                            <div class="absolute top-6 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 transform scale-50 group-hover:scale-100">
                                <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center text-white">
                                    <i data-lucide="arrow-up-right" class="w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endforelse
            </div>
        </div>
    </section>
</div>
