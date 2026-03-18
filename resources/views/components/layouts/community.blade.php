<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Tococo Community - Connect. Share. Grow.' }}</title>
        
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
    <body class="antialiased bg-[#0B0F19] text-gray-300 font-sans selection:bg-orange-500 selection:text-white">
        <!-- Dashboard Navigation -->
        <nav class="fixed top-0 w-full z-50 bg-[#111827]/80 backdrop-blur-xl border-b border-gray-800 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex-shrink-0 flex items-center gap-3">
                        <a href="{{ route('community.index') ?? '/' }}" class="flex items-center gap-2 group">
                            <img src="/icon/icon.png" alt="Tococo Icon" class="h-8 w-auto sm:hidden group-hover:scale-105 transition-transform duration-300">
                            <img src="/icon/text-icon.png" alt="Tococo Logo" class="h-8 w-auto hidden sm:block group-hover:scale-105 transition-transform duration-300">
                        </a>
                    </div>
                    <div class="hidden md:flex space-x-1">
                        <a href="http://tococoindonesia.com" class="px-4 py-2 text-sm font-medium text-gray-400 hover:text-white hover:bg-white/5 rounded-lg transition-colors">Main Hub</a>
                        <a href="http://news.tococoindonesia.com" class="px-4 py-2 text-sm font-medium text-gray-400 hover:text-white hover:bg-white/5 rounded-lg transition-colors">News</a>
                        <a href="http://career.tococoindonesia.com" class="px-4 py-2 text-sm font-medium text-gray-400 hover:text-white hover:bg-white/5 rounded-lg transition-colors">Career</a>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-8 h-8 rounded-full bg-gray-800 border border-gray-700 flex items-center justify-center cursor-pointer hover:border-gray-500 transition-colors">
                            <i data-lucide="bell" class="w-4 h-4 text-gray-400"></i>
                        </div>
                        <a href="http://comunity.tococoindonesia.com/admin" class="flex items-center gap-2 px-3 py-1.5 bg-gray-800 hover:bg-gray-700 border border-gray-700 rounded-full transition-colors cursor-pointer">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-r from-orange-400 to-rose-400 flex items-center justify-center text-xs font-bold text-white shadow-inner">
                                C
                            </div>
                            <span class="text-sm font-medium text-white hidden sm:block">Login Space</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="flex min-h-screen pt-16">
            <!-- Sidebar Navigation -->
            <aside class="w-64 fixed hidden lg:block h-[calc(100vh-4rem)] bg-[#111827] border-r border-gray-800/60 overflow-y-auto">
                <div class="p-4 space-y-1">
                    <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 mt-4">Dashboard</p>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 bg-gray-800/50 text-white rounded-lg group border border-gray-700/50">
                        <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        <span class="font-medium text-sm">Feed</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-gray-400 hover:text-white hover:bg-gray-800/50 rounded-lg group transition-colors">
                        <svg class="w-5 h-5 group-hover:text-rose-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span class="font-medium text-sm">Targeted Events</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-gray-400 hover:text-white hover:bg-gray-800/50 rounded-lg group transition-colors">
                        <svg class="w-5 h-5 group-hover:text-blue-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        <span class="font-medium text-sm">Member Directory</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-gray-400 hover:text-white hover:bg-gray-800/50 rounded-lg group transition-colors">
                        <svg class="w-5 h-5 group-hover:text-indigo-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        <span class="font-medium text-sm">Discussions</span>
                    </a>
                    
                    <div class="mt-8"></div>
                    <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">My Space</p>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-gray-400 hover:text-white hover:bg-gray-800/50 rounded-lg group transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        <span class="font-medium text-sm">Profile</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-gray-400 hover:text-white hover:bg-gray-800/50 rounded-lg group transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span class="font-medium text-sm">Settings</span>
                    </a>
                </div>
            </aside>

            <!-- Main Workspace -->
            <main class="flex-1 lg:ml-64 p-4 lg:p-8">
                {{ $slot }}
            </main>
        </div>

        @livewireScripts
    </body>
</html>
