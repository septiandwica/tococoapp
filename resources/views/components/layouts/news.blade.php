<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Tococo News - Your Trusted Source' }}</title>
        
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
    </head>
    <body class="antialiased bg-slate-50 text-slate-900 font-sans selection:bg-blue-500 selection:text-white">
        <!-- Navigation -->
        <nav class="sticky top-0 w-full z-50 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-sm transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex-shrink-0 flex items-center gap-3">
                        <a href="{{ route('news.index') }}" class="flex items-center gap-2 group">
                            <img src="/icon/icon.png" alt="Tococo Icon" class="h-8 w-auto md:hidden group-hover:scale-105 transition-transform duration-300">
                            <img src="/icon/text-icon.png" alt="Tococo Logo" class="h-8 w-auto hidden md:block group-hover:scale-105 transition-transform duration-300">
                        </a>
                    </div>
                    <div class="hidden sm:flex space-x-6">
                        <a href="http://tococoindonesia.com" class="text-sm font-medium text-slate-500 hover:text-blue-600 transition-colors">Main Hub</a>
                        <a href="http://career.tococoindonesia.com" class="text-sm font-medium text-slate-500 hover:text-blue-600 transition-colors">Career</a>
                        <a href="http://comunity.tococoindonesia.com" class="text-sm font-medium text-slate-500 hover:text-blue-600 transition-colors">Community</a>
                    </div>
                    <div class="flex items-center">
                        <div class="relative">
                            <input type="text" placeholder="Search news..." class="bg-slate-100 border-none rounded-full text-sm px-4 py-1.5 focus:ring-2 focus:ring-blue-500 hidden md:block">
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main class="min-h-screen">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-slate-200 pt-12 pb-8 mt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
                <div class="flex items-center gap-2 mb-4">
                    <img src="/icon/full-icon.png" alt="Tococo Hub" class="h-16 w-auto">
                </div>
                <p class="text-slate-500 text-sm text-center max-w-md">&copy; {{ date('Y') }} Tococo Media Ecosystem. Providing accurate, timely, and insightful news for our community.</p>
                
                <div class="flex gap-4 mt-8">
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-blue-600 hover:text-white transition-all duration-300">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-pink-600 hover:text-white transition-all duration-300">
                        <i data-lucide="instagram" class="w-5 h-5"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-sky-500 hover:text-white transition-all duration-300">
                        <i data-lucide="twitter" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </footer>

        @livewireScripts
    </body>
</html>
