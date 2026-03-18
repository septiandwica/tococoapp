<div class="section-gap bg-brand-white">
    <div class="container-tococo">
        <!-- Welcome Header -->
        <div class="mb-12 relative overflow-hidden rounded-[2rem] bg-brand-charcoal border border-gray-800 p-12 shadow-2xl animate-reveal">
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-brand-emerald rounded-full mix-blend-overlay filter blur-[100px] opacity-20"></div>
            <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-64 h-64 bg-brand-forest rounded-full mix-blend-overlay filter blur-[100px] opacity-20"></div>
            
            <div class="relative z-10">
                <span class="text-accent text-brand-emerald mb-4 block">Member Portal</span>
                <h1 class="text-display text-white mb-2">Welcome Back, <span class="text-brand-emerald font-serif italic lowercase font-normal">Member</span></h1>
                <p class="text-white/40 font-medium">Here's what's happening in your digital community today.</p>
            </div>
        </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Feed (Posts) -->
        <div class="lg:col-span-2 space-y-6">
            <h2 class="text-xl font-bold text-white flex items-center gap-2">
                <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                Community Feed
            </h2>
            
            <div class="bg-[#111827] border border-gray-800 rounded-2xl p-4 shadow-sm flex gap-4 items-center">
                <div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <input type="text" placeholder="Share something with the community..." disabled class="bg-transparent border-none focus:ring-0 text-white w-full text-sm cursor-not-allowed placeholder-gray-500">
                <button disabled title="Login to post" class="px-4 py-2 bg-gray-800 text-gray-400 rounded-lg text-sm font-semibold shrink-0 cursor-not-allowed">Post</button>
            </div>

            @if($posts->isEmpty())
                <div class="bg-[#111827] border border-gray-800 rounded-3xl p-12 text-center text-gray-400">
                    <svg class="w-12 h-12 mx-auto text-gray-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    <p>It's quiet here. Be the first to start a discussion by logging into the admin panel!</p>
                </div>
            @else
                <div class="space-y-6">
                    @foreach($posts as $post)
                        <div class="bg-[#111827] border border-gray-800 rounded-3xl p-6 shadow-sm hover:border-gray-700 transition-colors">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-orange-400 to-rose-400 flex items-center justify-center text-white font-bold shadow-inner">
                                        {{ substr($post->user?->name ?? 'M', 0, 1) }}
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-white text-sm">{{ $post->user?->name ?? 'Community Member' }}</h3>
                                        <p class="text-xs text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <button class="text-gray-500 hover:text-white transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                                </button>
                            </div>
                            <h2 class="text-lg font-bold text-white mb-2">{{ $post->title }}</h2>
                            <div class="text-gray-300 text-sm leading-relaxed mb-4">
                                {!! $post->content !!}
                            </div>
                            <div class="flex items-center gap-6 pt-4 border-t border-gray-800/80">
                                <button class="flex items-center gap-2 text-sm text-gray-400 hover:text-orange-400 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                    Like
                                </button>
                                <button class="flex items-center gap-2 text-sm text-gray-400 hover:text-blue-400 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                    Comment
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Sidebar / Right Column (Events) -->
        <div class="space-y-6">
            <h2 class="text-xl font-bold text-white flex items-center gap-2">
                <svg class="w-5 h-5 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                Upcoming Events
            </h2>
            
            <div class="bg-[#111827] border border-gray-800 rounded-3xl p-6 shadow-sm">
                @if($events->isEmpty())
                    <p class="text-sm text-gray-500 text-center py-4">No upcoming events right now.</p>
                @else
                    <div class="space-y-4">
                        @foreach($events as $event)
                            <div class="flex gap-4 border-b border-gray-800 last:border-0 pb-4 last:pb-0">
                                <div class="w-14 h-14 bg-gray-800 rounded-xl flex flex-col items-center justify-center shrink-0 border border-gray-700">
                                    <span class="text-xs text-rose-400 font-bold uppercase">{{ $event->start_time?->format('M') ?? 'TBA' }}</span>
                                    <span class="text-lg text-white font-black">{{ $event->start_time?->format('d') ?? '-' }}</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-white font-bold text-sm leading-tight truncate">{{ $event->title }}</h4>
                                    <p class="text-xs text-gray-400 mt-1 flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        {{ $event->start_time ? $event->start_time->format('H:i') . ' WIB' : 'TBA' }}
                                    </p>
                                    @if($event->is_online)
                                        <span class="inline-block mt-2 text-[10px] font-bold bg-blue-500/10 text-blue-400 px-2 py-0.5 rounded border border-blue-500/20">Online</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                <button class="w-full mt-6 py-2 border border-gray-700 text-gray-300 rounded-xl text-sm font-semibold hover:bg-gray-800 hover:text-white transition-colors">
                    View Calendar
                </button>
            </div>
            
            <!-- Quick Links -->
            <div class="bg-gradient-to-br from-indigo-900/50 to-purple-900/50 border border-indigo-500/20 rounded-3xl p-6 relative overflow-hidden">
                <div class="absolute -right-4 -bottom-4 opacity-10">
                    <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                </div>
                <h3 class="text-white font-bold mb-2">Want to lead a discussion?</h3>
                <p class="text-indigo-200 text-sm mb-4">You can request to become a verified creator or event organizer.</p>
                <a href="http://comunity.tococoindonesia.com/admin" class="inline-block px-4 py-2 bg-white text-indigo-900 font-bold rounded-lg text-sm shadow-lg hover:shadow-xl transition-shadow w-full text-center">Open Portal</a>
            </div>
        </div>
    </div>
</div>
