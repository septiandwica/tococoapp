<div class="bg-brand-white selection:bg-brand-emerald/10 selection:text-brand-emerald">
    <article class="container-tococo py-12 pt-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-8 text-xs font-bold uppercase tracking-widest text-brand-charcoal/50">
            <a href="{{ route('news.index') }}" class="hover:text-brand-emerald transition-colors">News</a>
            <span class="mx-3">&rsaquo;</span>
            @if($article->category)
                <a href="#" class="hover:text-brand-emerald transition-colors">{{ $article->category->name }}</a>
                <span class="mx-3">&rsaquo;</span>
            @endif
            <span class="text-brand-charcoal truncate max-w-[200px] sm:max-w-none">{{ Str::limit($article->title, 40) }}</span>
        </nav>

        <header class="mb-10 lg:mb-14 max-w-4xl mx-auto text-center">
            @if($article->category)
                <span class="inline-block bg-brand-emerald/10 text-brand-emerald text-[10px] font-black uppercase tracking-widest px-4 py-1.5 rounded-full mb-6">
                    {{ $article->category->name }}
                </span>
            @endif
            <h1 class="golden-h1 mb-8">
                {{ $article->title }}
            </h1>
            <div class="flex flex-wrap items-center justify-center gap-6 text-brand-charcoal/70 border-b border-gray-100 pb-8">
                <div class="flex items-center gap-3 pr-6 border-r border-gray-200">
                    <div class="w-10 h-10 bg-brand-light rounded-full flex items-center justify-center text-brand-emerald font-black">
                        {{ substr($article->author?->name ?? 'T', 0, 1) }}
                    </div>
                    <div class="text-left">
                        <p class="font-bold text-brand-charcoal text-sm uppercase tracking-wider">{{ $article->author?->name ?? 'Tococo Editorial' }}</p>
                        <p class="text-[10px] uppercase tracking-widest text-brand-charcoal/50">Author</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-brand-charcoal/50">
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                    <time datetime="{{ $article->created_at }}">{{ $article->created_at->format('F j, Y') }}</time>
                </div>
            </div>
        </header>

        <div class="max-w-5xl mx-auto">
            @if($article->image)
                <figure class="mb-16 rounded-[2.5rem] overflow-hidden shadow-xl shadow-brand-emerald/5 border border-gray-100 relative group aspect-[21/9]">
                    <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-charcoal/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                </figure>
            @endif

            <div class="prose prose-lg md:prose-xl prose-stone max-w-4xl mx-auto 
                prose-headings:font-black prose-headings:text-brand-charcoal prose-headings:uppercase prose-headings:tracking-tighter
                prose-p:golden-body prose-p:text-brand-charcoal/80
                prose-a:text-brand-emerald prose-a:font-bold prose-a:no-underline hover:prose-a:text-brand-forest
                prose-img:rounded-[2rem] prose-img:shadow-lg
                prose-blockquote:border-brand-emerald prose-blockquote:bg-brand-light prose-blockquote:py-2 prose-blockquote:px-6 prose-blockquote:rounded-r-2xl prose-blockquote:italic prose-blockquote:text-brand-charcoal/90 text-justify">
                {!! $article->content !!}
            </div>

            <div class="mt-20 pt-10 border-t border-gray-100 max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="golden-caption mb-2 text-center md:text-left">Share this insight</h3>
                    <p class="text-sm text-brand-charcoal/50 text-center md:text-left">Spread the word about sustainable coconut innovation.</p>
                </div>
                <div class="flex gap-4">
                    <button class="w-12 h-12 rounded-full bg-brand-light flex items-center justify-center text-brand-emerald hover:bg-brand-emerald hover:text-white transition-all duration-300 shadow-sm hover:shadow-lg hover:-translate-y-1">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </button>
                    <button class="w-12 h-12 rounded-full bg-brand-light flex items-center justify-center text-brand-emerald hover:bg-brand-emerald hover:text-white transition-all duration-300 shadow-sm hover:shadow-lg hover:-translate-y-1">
                        <i data-lucide="twitter" class="w-5 h-5"></i>
                    </button>
                    <button class="w-12 h-12 rounded-full bg-brand-light flex items-center justify-center text-brand-emerald hover:bg-brand-emerald hover:text-white transition-all duration-300 shadow-sm hover:shadow-lg hover:-translate-y-1" onclick="window.print()">
                        <i data-lucide="printer" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </article>
</div>
