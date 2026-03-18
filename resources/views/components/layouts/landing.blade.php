<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Tococo Indonesia — Authentic Coconut Products from Banyumas' }}</title>
        
        <!-- Primary Meta Tags -->
        <meta name="title" content="{{ $title ?? 'Tococo Indonesia — Authentic Coconut Products from Banyumas' }}">
        <meta name="description" content="{{ $metaDescription ?? 'Pioneering coconut innovation with a zero-waste philosophy. Discover our premium Tococo Chips, ALCOCO Virgin Coconut Oil, and healthy blends.' }}">
        <meta name="keywords" content="coconut chips, virgin coconut oil, healthy snacks, zero waste coconut, tococo indonesia, banyumas coconut, indonesian agriculture">
        <meta name="author" content="Tococo Indonesia">
        <meta name="robots" content="index, follow">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ $title ?? 'Tococo Indonesia — Authentic Coconut Products from Banyumas' }}">
        <meta property="og:description" content="{{ $metaDescription ?? 'Pioneering coconut innovation with a zero-waste philosophy. Purely Indonesian, globally recognized.' }}">
        <meta property="og:image" content="{{ $ogImage ?? asset('hero.png') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="{{ $title ?? 'Tococo Indonesia — Authentic Coconut Products from Banyumas' }}">
        <meta property="twitter:description" content="{{ $metaDescription ?? 'Pioneering coconut innovation with a zero-waste philosophy. Purely Indonesian, globally recognized.' }}">
        <meta property="twitter:image" content="{{ $ogImage ?? asset('hero.png') }}">

        @stack('meta')

        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cardo:italic,wght@0,400;0,700;1,400&family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased bg-brand-white text-brand-charcoal selection:bg-brand-emerald/10 selection:text-brand-emerald" x-data="{ mobileMenuOpen: false }">
        <!-- Navigation -->
        <nav class="fixed w-full z-100 transition-all duration-300 bg-white/95 backdrop-blur-md border-b border-gray-100">
            <div class="container-tococo">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="{{ route('landing.home') }}" class="flex items-center gap-3 group">
                            <img src="/icon/icon.png" alt="Tococo Icon" class="h-9 w-auto md:hidden group-hover:scale-105 transition-transform duration-300">
                            <img src="/icon/text-icon.png" alt="Tococo Logo" class="h-9 w-auto hidden md:block group-hover:scale-105 transition-transform duration-300">
                        </a>
                    </div>
                    
                    <!-- Desktop Nav -->
                    <div class="hidden lg:flex space-x-10">
                        <x-nav-link href="{{ route('landing.home') }}" :active="request()->routeIs('landing.home')">Home</x-nav-link>
                        <x-nav-link href="{{ route('landing.about') }}" :active="request()->routeIs('landing.about')">About</x-nav-link>
                        <x-nav-link href="{{ route('landing.products') }}" :active="request()->routeIs('landing.products')">Products</x-nav-link>
                        <x-nav-link href="{{ route('news.index') }}" :active="request()->routeIs('news.*')">News</x-nav-link>
                        <x-nav-link href="{{ route('career.index') }}" :active="request()->routeIs('career.*')">Career</x-nav-link>
                        <x-nav-link href="{{ route('comunity.index') }}" :active="request()->routeIs('comunity.*')">Community</x-nav-link>
                    </div>
                    
                    <!-- Mobile Menu Toggle -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 text-brand-charcoal hover:bg-gray-50 rounded-lg transition-colors">
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Nav Overlay -->
            <div x-show="mobileMenuOpen" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 @click.away="mobileMenuOpen = false"
                 class="lg:hidden bg-white border-b border-gray-100 p-golden-md space-y-golden-base shadow-xl">
                <a href="{{ route('landing.home') }}" class="block golden-caption hover:text-brand-emerald transition-colors">Home</a>
                <a href="{{ route('landing.about') }}" class="block golden-caption hover:text-brand-emerald transition-colors">About</a>
                <a href="{{ route('landing.products') }}" class="block golden-caption hover:text-brand-emerald transition-colors">Products</a>
                <a href="{{ route('news.index') }}" class="block golden-caption hover:text-brand-emerald transition-colors">News</a>
                <a href="{{ route('career.index') }}" class="block golden-caption hover:text-brand-emerald transition-colors">Career</a>
                <a href="{{ route('comunity.index') }}" class="block golden-caption hover:text-brand-emerald transition-colors">Community</a>
            </div>
        </nav>

        <main class="min-h-screen pt-20">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-brand-light text-brand-charcoal section-golden border-t border-gray-100">
            <div class="container-tococo">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-golden-md md:gap-golden-base">
                    <!-- Brand Column -->
                    <div class="md:col-span-5">
                        <div class="flex items-center gap-3 mb-golden-base">
                            <img src="/icon/full-icon.png" alt="Tococo Full Logo" class="h-20 w-auto">
                        </div>
                        <p class="golden-body mb-golden-md">
                            Pioneering coconut innovation with a zero-waste philosophy. Purely Indonesian, globally recognized.
                        </p>
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-brand-light flex items-center justify-center text-brand-emerald hover:bg-brand-emerald hover:text-white transition-all duration-300">
                                <i data-lucide="linkedin" class="w-5 h-5"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-brand-light flex items-center justify-center text-brand-emerald hover:bg-brand-emerald hover:text-white transition-all duration-300">
                                <i data-lucide="instagram" class="w-5 h-5"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-brand-light flex items-center justify-center text-brand-emerald hover:bg-brand-emerald hover:text-white transition-all duration-300">
                                <i data-lucide="twitter" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Sitemap -->
                    <div class="md:col-span-3">
                        <h3 class="golden-caption text-brand-emerald mb-golden-base block opacity-80">Navigate</h3>
                        <div class="grid grid-cols-2 gap-golden-sm">
                            <ul class="space-y-4">
                                <li><a href="{{ route('landing.home') }}" class="footer-link">Home</a></li>
                                <li><a href="{{ route('landing.about') }}" class="footer-link">About</a></li>
                                <li><a href="{{ route('landing.products') }}" class="footer-link">Products</a></li>
                            </ul>
                            <ul class="space-y-4">
                                <li><a href="{{ route('news.index') }}" class="footer-link">News</a></li>
                                <li><a href="{{ route('career.index') }}" class="footer-link">Career</a></li>
                                <li><a href="{{ route('comunity.index') }}" class="footer-link">Community</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="md:col-span-4 flex flex-col items-start md:items-end text-left md:text-right">
                        <h3 class="golden-caption text-brand-emerald mb-golden-base block opacity-80">Get in Touch</h3>
                        <p class="golden-caption leading-loose mb-golden-base">
                            Banyumas Regency, Central Java, Indonesia.<br>
                            PT. Berkah Argo Tococo Indonesia.
                        </p>
                        <div class="space-y-1">
                            <a href="https://wa.me/6281392385176" target="_blank" class="block text-lg font-black text-brand-charcoal/80 hover:text-brand-emerald transition-all">
                                +62 813 9238 5176
                            </a>
                            <a href="mailto:hello@tococoindonesia.com" class="block text-sm font-bold text-brand-emerald hover:text-brand-forest transition-all border-b border-brand-emerald/10 hover:border-brand-emerald/100">
                                hello@tococoindonesia.com
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-golden-xl pt-golden-base border-t border-gray-200/50 flex flex-col md:flex-row justify-between items-center gap-golden-sm">
                    <p class="golden-caption">© {{ date('Y') }} Tococo Indonesia. All rights reserved.</p>
                    <div class="flex gap-golden-base">
                        <a href="#" class="golden-caption hover:text-brand-charcoal transition-all">Privacy</a>
                        <a href="#" class="golden-caption hover:text-brand-charcoal transition-all">Terms</a>
                    </div>
                </div>
            </div>
        </footer>

        @livewireScripts
    </body>
</html>
