<div class="bg-brand-white text-brand-charcoal selection:bg-brand-emerald/10 selection:text-brand-emerald">
    <!-- Hero Section: Modern & Impactful -->
    <section class="relative min-h-[90vh] flex items-center overflow-hidden bg-brand-light">
        <!-- Minimal Grid Pattern -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#10b981 1px, transparent 1px); background-size: 40px 40px;"></div>
        
        <div class="container-tococo relative z-10 grid lg:grid-cols-2 gap-golden-xl items-center animate-reveal text-brand-charcoal">
            <div>
                <div class="badge-tococo mb-golden-base">
                    Pioneering Coconut Excellence
                </div>
                
                <h1 class="golden-h1 mb-golden-base">
                    Sustainable <span class="text-brand-emerald">Innovation</span><br>
                    from the Source.
                </h1>
                
                <p class="golden-body text-lg md:text-xl text-brand-charcoal/50 font-medium mb-golden-md">
                    Leading PT. Berkah Argo Tococo Indonesia in transforming natural coconut potential into high-value global solutions with a zero-waste philosophy.
                </p>
                
                <div class="flex flex-col sm:flex-row items-center gap-golden-base">
                    <a href="#products" class="btn-tococo-primary">
                        Explore Products
                    </a>
                    <a href="{{ route('landing.about') }}" class="btn-tococo-secondary">
                        Company Story
                    </a>
                </div>
            </div>
            
            <div class="relative hidden lg:block">
                <div class="aspect-square bg-white rounded-[3rem] shadow-2xl overflow-hidden p-3 border border-gray-100 transform rotate-3 group">
                    <div class="w-full h-full bg-brand-light rounded-[2.5rem] flex items-center justify-center overflow-hidden">
                         <img src="{{ asset('hero.png') }}" alt="Tococo Hero" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                </div>
                <!-- Float Accent -->
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-brand-emerald rounded-3xl shadow-xl flex items-center justify-center animate-float overflow-hidden p-6" style="animation-delay: -2s">
                    <img src="{{ asset('icon/icon.png') }}" class="w-full h-full object-contain" alt="Tococo Icon">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats: Premium & Impactful -->
    <section class="section-golden bg-brand-forest relative overflow-hidden">
        <!-- Abstract Background Accent -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(16,185,129,0.1),transparent)]"></div>
        <div class="absolute inset-0 bg-linear-to-b from-brand-forest/0 to-brand-charcoal/20"></div>
        
        <div class="container-tococo relative z-10" x-data="{
            animateValue(el, start, end, duration, padZero) {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    const easeProgress = 1 - Math.pow(1 - progress, 3); // ease out cubic
                    let current = Math.floor(easeProgress * (end - start) + start);
                    el.innerText = padZero ? String(current).padStart(2, '0') : current;
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    } else {
                        el.innerText = padZero ? String(end).padStart(2, '0') : end;
                    }
                };
                window.requestAnimationFrame(step);
            },
            observe(targetEl, start, end, padZero = false) {
                let observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            this.animateValue(targetEl, start, end, 2000, padZero);
                            observer.unobserve(targetEl);
                        }
                    });
                }, { threshold: 0.5 });
                observer.observe(targetEl);
            }
        }">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-golden-md">
                <div class="text-center group border-r border-white/5 last:border-0">
                    <span class="golden-caption text-brand-emerald mb-golden-base block">Suppliers</span>
                    <span class="golden-h2 text-brand-emerald drop-shadow-[0_0_15px_rgba(16,185,129,0.3)] block"><span x-init="observe($el, 0, 100)">0</span><span class="text-white/20">+</span></span>
                    <p class="golden-caption text-white/60 mt-3 block font-medium">Local Farmers</p>
                </div>
                <div class="text-center group border-r border-white/5 last:border-0">
                    <span class="golden-caption text-brand-emerald mb-golden-base block">Founded</span>
                    <span class="golden-h2 text-white block" x-init="observe($el, 0, 2020)">0</span>
                    <p class="golden-caption text-white/60 mt-3 block font-medium">Banyumas, ID</p>
                </div>
                <div class="text-center group border-r border-white/5 last:border-0">
                    <span class="golden-caption text-brand-emerald mb-golden-base block">Strategy</span>
                    <span class="golden-h2 text-brand-emerald drop-shadow-[0_0_15px_rgba(16,185,129,0.3)] italic font-serif block">Zero</span>
                    <p class="golden-caption text-white/60 mt-3 block font-medium">Waste Mindset</p>
                </div>
                <div class="text-center group">
                    <span class="golden-caption text-brand-emerald mb-golden-base block">Network</span>
                    <span class="golden-h2 text-white block" x-init="observe($el, 0, 4, true)">00</span>
                    <p class="golden-caption text-white/60 mt-3 block font-medium">Partner Villages</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Corporate Vision -->
    <section class="section-golden bg-brand-white text-brand-charcoal">
        <div class="container-tococo">
            <div class="text-center mb-golden-xl">
                <span class="golden-caption text-brand-emerald mb-golden-base block">Our Commitment</span>
                <h2 class="golden-h1 text-brand-charcoal uppercase italic">Corporate Vision</h2>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <div class="rounded-3xl overflow-hidden shadow-2xl bg-brand-charcoal">
                    <div class="plyr__video-embed" id="player">
                        <iframe 
                            src="https://www.youtube-nocookie.com/embed/oxxmD_ZAMq4?origin={{ urlencode(url('/')) }}&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" 
                            allowfullscreen 
                            allowtransparency 
                            allow="autoplay">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Selection: Informative Density -->
    <section id="about" class="section-golden bg-brand-light text-brand-charcoal">
        <div class="container-tococo">
            <div class="grid lg:grid-cols-2 gap-golden-xl items-center text-brand-charcoal">
                <div class="animate-reveal">
                    <h2 class="golden-h1 mb-golden-base">
                        Crafting <span class="text-brand-emerald font-serif italic lowercase font-normal">Pure</span> Potential
                    </h2>
                    <p class="golden-body text-lg text-brand-charcoal/60 font-medium mb-golden-md">
                        We bridge the gap between rural coconut potential and global industry demands through advanced processing and sustainable practices that empower the whole ecosystem.
                    </p>
                    <div class="space-y-golden-base mb-golden-lg">
                        <div class="flex items-start gap-golden-sm">
                            <div class="w-6 h-6 rounded-full bg-brand-emerald/10 flex items-center justify-center text-brand-emerald mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <p class="golden-body font-bold text-brand-charcoal/70">100% Sustainable Sourcing</p>
                        </div>
                        <div class="flex items-start gap-golden-sm">
                            <div class="w-6 h-6 rounded-full bg-brand-emerald/10 flex items-center justify-center text-brand-emerald mt-1">
                                <i data-lucide="check" class="w-4 h-4"></i>
                            </div>
                            <p class="golden-body font-bold text-brand-charcoal/70">Community Empowerment Models</p>
                        </div>
                    </div>
                    <a href="{{ route('landing.about') }}" class="btn-tococo-secondary">
                        Full Discovery &rarr;
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-golden-base">
                    <div class="tococo-card text-center space-y-golden-sm transform hover:-translate-y-2 flex flex-col items-center justify-center p-golden-base">
                        <i data-lucide="shield-check" class="w-10 h-10 text-brand-emerald"></i>
                        <h3 class="golden-caption">Quality</h3>
                    </div>
                    <div class="tococo-card text-center space-y-golden-sm mt-golden-base transform hover:-translate-y-2 flex flex-col items-center justify-center p-golden-base">
                        <i data-lucide="leaf" class="w-10 h-10 text-brand-emerald"></i>
                        <h3 class="golden-caption">Growth</h3>
                    </div>
                    <div class="tococo-card text-center space-y-golden-sm transform hover:-translate-y-2 flex flex-col items-center justify-center p-golden-base">
                        <i data-lucide="globe" class="w-10 h-10 text-brand-emerald"></i>
                        <h3 class="golden-caption">Global</h3>
                    </div>
                    <div class="tococo-card text-center space-y-golden-sm mt-golden-base transform hover:-translate-y-2 flex flex-col items-center justify-center p-golden-base">
                        <i data-lucide="zap" class="w-10 h-10 text-brand-emerald"></i>
                        <h3 class="golden-caption">Impact</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products: Minimalist Catalog -->
    <section id="products" class="section-golden bg-brand-white text-brand-charcoal">
        <div class="container-tococo">
            <div class="flex flex-col md:flex-row justify-between items-end mb-golden-xl gap-golden-base text-left text-brand-charcoal">
                <div>
                    <span class="golden-caption text-brand-emerald mb-golden-base block">Our Portfolio</span>
                    <h2 class="golden-h1 text-brand-charcoal">Featured <span class="text-brand-charcoal/30 italic">Catalog</span></h2>
                </div>
                <a href="{{ route('landing.products') }}" class="btn-tococo-secondary">
                    View Catalog
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-golden-base">
                @php
                    $highlights = \App\Models\Product::where('is_active', true)->take(4)->get();
                @endphp
                @foreach($highlights as $p)
                    <a href="{{ route('landing.products.detail', $p->slug) }}" class="group relative aspect-[4/5] rounded-[2.5rem] overflow-hidden bg-brand-light shadow-xl hover:-translate-y-2 transition-all duration-700">
                        <!-- Product Image -->
                        <div class="absolute inset-0">
                            <img src="{{ asset($p->image) }}" alt="{{ $p->name }}" class="h-full w-full object-cover transition-transform duration-1000 group-hover:scale-110">
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
                                    {{ $p->name }}
                                </h3>
                                <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/60 mt-2 block">
                                    {{ $p->tagline }}
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
                @endforeach
            </div>
        </div>
    </section>

    <!-- Final Call: The Pure End -->
    <section class="section-golden bg-brand-light relative overflow-hidden">
        <div class="container-tococo text-center relative z-10">
            <h2 class="golden-h1 mb-golden-xl">
                Sustain <br>The <span class="text-brand-emerald font-serif italic font-normal">Future.</span>
            </h2>
            <div class="flex justify-center gap-golden-base">
                <a href="mailto:hello@tococoindonesia.com" class="btn-tococo-primary">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Promo/Event Popup Modal -->
    <div x-data="{ 
            showPromo: false, 
            activeSlide: 0, 
            slides: ['/pop-up/haus-market.jpg', '/pop-up/tripoli.jpg'],
            init() {
                if (!sessionStorage.getItem('promo-dismissed')) {
                    setTimeout(() => {
                        this.showPromo = true;
                    }, 1500);
                }
                setInterval(() => {
                    if (this.showPromo) {
                        this.activeSlide = (this.activeSlide + 1) % this.slides.length;
                    }
                }, 4000);
            }
         }"
         x-show="showPromo"
         x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-brand-charcoal/40 backdrop-blur-md"
         style="display: none;">
        
        <div class="relative w-full max-w-lg bg-white rounded-2xl overflow-hidden shadow-2xl animate-reveal" @click.away="showPromo = false; sessionStorage.setItem('promo-dismissed', 'true')">
            <!-- Close Button -->
            <button @click="showPromo = false; sessionStorage.setItem('promo-dismissed', 'true')" 
                    class="absolute top-4 right-4 z-20 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center text-brand-charcoal hover:bg-brand-emerald hover:text-white transition-all shadow-lg group">
                <svg class="w-5 h-5 transition-transform group-hover:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <!-- Slider Content -->
            <div class="relative grid grid-cols-1 grid-rows-1 overflow-hidden bg-transparent">
                <!-- Pre-rendered images to force instant loading by browser -->
                <img src="/pop-up/haus-market.jpg" 
                     x-show="activeSlide === 0"
                     fetchpriority="high"
                     x-transition:enter="transition ease-in-out duration-700"
                     x-transition:enter-start="opacity-0 scale-105"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in-out duration-700"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="col-start-1 row-start-1 w-full h-auto max-h-[85vh] object-contain shadow-inner"
                     alt="Event Image 1">
                     
                <img src="/pop-up/tripoli.jpg" 
                     x-show="activeSlide === 1"
                     fetchpriority="high"
                     x-transition:enter="transition ease-in-out duration-700"
                     x-transition:enter-start="opacity-0 scale-105"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in-out duration-700"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="col-start-1 row-start-1 w-full h-auto max-h-[85vh] object-contain shadow-inner"
                     alt="Event Image 2">

                <!-- Navigation Dots -->
                <div class="absolute bottom-6 left-0 right-0 flex justify-center gap-2 z-10">
                    <button @click="activeSlide = 0" 
                            class="w-2.5 h-2.5 rounded-full transition-all duration-300 shadow-sm"
                            :class="activeSlide === 0 ? 'bg-brand-emerald w-8' : 'bg-white/50 hover:bg-white'"></button>
                    <button @click="activeSlide = 1" 
                            class="w-2.5 h-2.5 rounded-full transition-all duration-300 shadow-sm"
                            :class="activeSlide === 1 ? 'bg-brand-emerald w-8' : 'bg-white/50 hover:bg-white'"></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Plyr Initialization JS -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const player = new Plyr('#player', {
                controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
                settings: ['quality', 'speed'],
                youtube: {
                    noCookie: true,
                    rel: 0,
                    showinfo: 0,
                    iv_load_policy: 3,
                    modestbranding: 1
                }
            });
        });
    </script>
</div>
