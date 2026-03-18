<div class="section-gap bg-brand-white">
    <div class="container-tococo">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 border-b border-gray-100 pb-8 animate-reveal">
            <div>
                <span class="text-accent mb-4 block">Corporate News</span>
                <h1 class="text-display">Latest <span class="text-brand-emerald">Headlines</span></h1>
            </div>
            <div class="hidden md:block">
                <p class="text-[11px] font-bold uppercase tracking-widest text-brand-charcoal/30">{{ now()->format('l, F j, Y') }}</p>
            </div>
        </div>

    @if($articles->isEmpty())
        <div class="text-center py-20 bg-white rounded-2xl shadow-sm border border-slate-100">
            <svg class="mx-auto h-12 w-12 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
            <h3 class="mt-4 text-lg font-semibold text-slate-900">No articles found</h3>
            <p class="mt-1 text-slate-500">Our authors are working hard on the next big story.</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $index => $article)
                <!-- First article is featured if it's the first page -->
                @if($index === 0 && $articles->currentPage() === 1)
                    <article class="col-span-1 md:col-span-2 lg:col-span-3 bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 group flex flex-col md:flex-row hover:shadow-lg transition-shadow duration-300">
                        <div class="w-full md:w-2/3 aspect-[16/9] md:aspect-auto bg-slate-100 relative overflow-hidden">
                            @if($article->image)
                                <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            @else
                                <div class="w-full h-full bg-slate-200 flex items-center justify-center">
                                    <span class="text-slate-400">Featured Image</span>
                                </div>
                            @endif
                            @if($article->category)
                                <div class="absolute top-4 left-4">
                                    <span class="bg-brand-emerald text-white text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full">{{ $article->category->name }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="w-full md:w-1/3 p-8 flex flex-col justify-center">
                            <div class="flex items-center gap-2 text-xs text-slate-500 mb-4 font-semibold uppercase tracking-wider">
                                <span>{{ $article->author?->name ?? 'Editorial' }}</span>
                                <span>&bull;</span>
                                <time datetime="{{ $article->created_at }}">{{ $article->created_at->format('M d, Y') }}</time>
                            </div>
                            <h2 class="text-3xl font-bold text-brand-charcoal leading-tight mb-4 group-hover:text-brand-emerald transition-colors">
                                <a href="{{ route('news.show', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h2>
                            <p class="text-slate-600 mb-6 line-clamp-4">{{ Str::limit(strip_tags($article->content), 200) }}</p>
                            <a href="{{ route('news.show', $article->slug) }}" class="inline-flex items-center text-brand-emerald font-semibold hover:text-brand-forest transition-colors">
                                Read full story &rarr;
                            </a>
                        </div>
                    </article>
                @else
                    <article class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 group hover:shadow-lg transition-shadow duration-300 flex flex-col">
                        <a href="{{ route('news.show', $article->slug) }}" class="block aspect-video bg-slate-100 relative overflow-hidden">
                            @if($article->image)
                                <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-slate-200 flex items-center justify-center">
                                    <span class="text-slate-400">Image</span>
                                </div>
                            @endif
                        </a>
                        <div class="p-6 flex flex-col flex-1">
                            <div class="flex items-center justify-between mb-3">
                                @if($article->category)
                                    <span class="text-brand-emerald text-xs font-bold uppercase tracking-wider">{{ $article->category->name }}</span>
                                @else
                                    <span></span>
                                @endif
                                <time class="text-xs text-slate-500" datetime="{{ $article->created_at }}">{{ $article->created_at->format('M d, Y') }}</time>
                            </div>
                            <h3 class="text-xl font-bold text-brand-charcoal leading-snug mb-3 group-hover:text-brand-emerald transition-colors">
                                <a href="{{ route('news.show', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            <p class="text-slate-600 text-sm mb-4 line-clamp-3 flex-1">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                            <div class="flex items-center gap-3 mt-auto pt-4 border-t border-slate-100">
                                <div class="w-8 h-8 bg-slate-200 rounded-full flex items-center justify-center text-slate-600 font-bold text-xs uppercase">
                                    {{ substr($article->author?->name ?? 'E', 0, 1) }}
                                </div>
                                <span class="text-sm font-medium text-slate-900">{{ $article->author?->name ?? 'News Editorial' }}</span>
                            </div>
                        </div>
                    </article>
                @endif
            @endforeach
        </div>
        
        <div class="mt-12">
            {{ $articles->links() }}
        </div>
    @endif
</div>
