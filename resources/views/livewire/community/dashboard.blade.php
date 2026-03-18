<div class="section-gap bg-brand-light">
    <div class="container-tococo">
        <!-- Welcome Header -->
        <div class="mb-12 relative overflow-hidden rounded-[2.5rem] bg-white border border-gray-100 p-12 shadow-sm animate-reveal">
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-brand-emerald rounded-full mix-blend-overlay filter blur-[100px] opacity-10"></div>
            <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-64 h-64 bg-emerald-300 rounded-full mix-blend-overlay filter blur-[100px] opacity-10"></div>
            
            <div class="relative z-10">
                <span class="text-accent text-brand-emerald mb-4 block">Member Portal</span>
                <h1 class="text-display text-brand-charcoal mb-2">Welcome Back, <span class="text-brand-emerald font-serif italic lowercase font-normal">Member</span></h1>
                <p class="text-brand-charcoal/60 font-medium font-inter">Here's what's happening in your digital community today.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Feed (Posts) -->
            <div class="lg:col-span-2 space-y-6">
                <h2 class="text-xl font-bold text-brand-charcoal flex items-center gap-2">
                    <i data-lucide="message-square" class="w-5 h-5 text-brand-emerald"></i>
                    Community Feed
                </h2>
                
                <div class="bg-white border border-gray-100 rounded-2xl p-4 shadow-sm flex gap-4 items-center">
                    <div class="w-10 h-10 rounded-full bg-brand-light flex items-center justify-center shrink-0">
                        <i data-lucide="user" class="w-5 h-5 text-brand-charcoal/40"></i>
                    </div>
                    <input type="text" placeholder="Share something with the community..." disabled class="bg-transparent border-none focus:ring-0 text-brand-charcoal w-full text-sm cursor-not-allowed placeholder-gray-400">
                    <button disabled title="Login to post" class="btn-tococo-secondary shrink-0 cursor-not-allowed opacity-50">Post</button>
                </div>

                @if($posts->isEmpty())
                    <div class="bg-white border border-gray-100 rounded-3xl p-12 text-center text-brand-charcoal/50">
                        <i data-lucide="inbox" class="w-12 h-12 mx-auto text-brand-charcoal/30 mb-4"></i>
                        <p class="font-inter font-medium text-brand-charcoal/70">It's quiet here. Be the first to start a discussion by logging into the admin panel!</p>
                    </div>
                @else
                    <div class="space-y-6">
                        @foreach($posts as $post)
                            <div class="bg-white border border-gray-100 rounded-3xl p-6 shadow-sm hover:shadow-md transition-shadow group">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-brand-emerald/10 flex items-center justify-center text-brand-emerald font-black shadow-inner">
                                            {{ substr($post->user?->name ?? 'M', 0, 1) }}
                                        </div>
                                        <div>
                                            <h3 class="font-bold text-brand-charcoal text-sm">{{ $post->user?->name ?? 'Community Member' }}</h3>
                                            <p class="text-xs text-brand-charcoal/50 font-medium">{{ $post->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                    <button class="text-gray-300 hover:text-brand-charcoal transition-colors">
                                        <i data-lucide="more-horizontal" class="w-5 h-5"></i>
                                    </button>
                                </div>
                                <h2 class="text-lg font-bold text-brand-charcoal mb-2 group-hover:text-brand-emerald transition-colors">{{ $post->title }}</h2>
                                <div class="text-brand-charcoal/70 text-sm leading-relaxed mb-4 font-inter">
                                    {!! $post->content !!}
                                </div>
                                <div class="flex items-center gap-6 pt-4 border-t border-gray-50">
                                    <button class="flex items-center gap-2 text-sm font-semibold text-brand-charcoal/50 hover:text-brand-emerald transition-colors">
                                        <i data-lucide="heart" class="w-4 h-4"></i>
                                        Like
                                    </button>
                                    <button class="flex items-center gap-2 text-sm font-semibold text-brand-charcoal/50 hover:text-brand-charcoal transition-colors">
                                        <i data-lucide="message-circle" class="w-4 h-4"></i>
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
                <h2 class="text-xl font-bold text-brand-charcoal flex items-center gap-2">
                    <i data-lucide="calendar" class="w-5 h-5 text-brand-emerald"></i>
                    Upcoming Events
                </h2>
                
                <div class="bg-white border border-gray-100 rounded-3xl p-6 shadow-sm">
                    @if($events->isEmpty())
                        <p class="text-sm font-medium text-brand-charcoal/50 text-center py-4">No upcoming events right now.</p>
                    @else
                        <div class="space-y-4">
                            @foreach($events as $event)
                                <div class="flex gap-4 border-b border-gray-50 last:border-0 pb-4 last:pb-0">
                                    <div class="w-14 h-14 bg-brand-light rounded-2xl flex flex-col items-center justify-center shrink-0 border border-brand-charcoal/5">
                                        <span class="text-[10px] text-brand-emerald font-black uppercase">{{ $event->start_time?->format('M') ?? 'TBA' }}</span>
                                        <span class="text-lg text-brand-charcoal font-black">{{ $event->start_time?->format('d') ?? '-' }}</span>
                                    </div>
                                    <div class="flex-1 min-w-0 flex flex-col justify-center">
                                        <h4 class="text-brand-charcoal font-bold text-sm leading-tight truncate">{{ $event->title }}</h4>
                                        <p class="text-[11px] font-bold tracking-wider uppercase text-brand-charcoal/50 mt-1 flex items-center gap-1">
                                            <i data-lucide="clock" class="w-3 h-3"></i>
                                            {{ $event->start_time ? $event->start_time->format('H:i') . ' WIB' : 'TBA' }}
                                        </p>
                                        @if($event->is_online)
                                            <span class="inline-block mt-2 text-[9px] w-fit font-black bg-brand-emerald/10 text-brand-emerald uppercase tracking-widest px-2 py-0.5 rounded border border-brand-emerald/20">Online</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <button class="w-full mt-6 py-2.5 border border-gray-200 text-brand-charcoal rounded-xl text-sm font-bold hover:bg-brand-charcoal hover:text-white transition-colors">
                        View Calendar
                    </button>
                </div>
                
                <!-- Quick Links -->
                <div class="bg-brand-charcoal rounded-3xl p-8 relative overflow-hidden group">
                    <div class="absolute -right-8 -bottom-8 opacity-10 text-white transform group-hover:scale-110 transition-transform duration-500">
                        <i data-lucide="star" class="w-40 h-40"></i>
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-white font-black text-xl mb-3">Want to lead a discussion?</h3>
                        <p class="text-white/70 text-sm mb-6 leading-relaxed font-inter">You can request to become a verified creator or event organizer in our community portal.</p>
                        <a href="http://comunity.tococoindonesia.com/admin" class="inline-block w-full py-3 px-6 bg-brand-emerald hover:bg-white text-white hover:text-brand-emerald font-bold rounded-xl text-sm text-center transition-colors shadow-lg shadow-brand-emerald/20">
                            Open Portal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
