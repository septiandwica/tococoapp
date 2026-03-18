<div class="bg-white">
    <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 pt-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-8 text-sm text-slate-500 font-medium">
            <a href="{{ route('news.index') }}" class="hover:text-blue-600 transition-colors">Home</a>
            <span class="mx-2">&rsaquo;</span>
            @if($article->category)
                <a href="#" class="hover:text-blue-600 transition-colors">{{ $article->category->name }}</a>
                <span class="mx-2">&rsaquo;</span>
            @endif
            <span class="text-slate-800 truncate">{{ Str::limit($article->title, 40) }}</span>
        </nav>

        <header class="mb-10 lg:mb-14">
            @if($article->category)
                <span class="inline-block bg-blue-100 text-blue-800 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-6">
                    {{ $article->category->name }}
                </span>
            @endif
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-tight mb-6 tracking-tight">
                {{ $article->title }}
            </h1>
            <div class="flex flex-wrap items-center gap-4 text-slate-600 border-b border-slate-200 pb-8">
                <div class="flex items-center gap-3 pr-4 border-r border-slate-300">
                    <div class="w-10 h-10 bg-slate-200 rounded-full flex items-center justify-center text-slate-600 font-bold">
                        {{ substr($article->author?->name ?? 'E', 0, 1) }}
                    </div>
                    <div>
                        <p class="font-semibold text-slate-900 text-sm">{{ $article->author?->name ?? 'Tococo Editorial' }}</p>
                        <p class="text-xs text-slate-500">Author</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 text-sm">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <time datetime="{{ $article->created_at }}">{{ $article->created_at->format('F j, Y - H:i') }}</time>
                </div>
            </div>
        </header>

        @if($article->image)
            <figure class="mb-12 rounded-3xl overflow-hidden shadow-lg border border-slate-100">
                <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full aspect-[21/9] object-cover">
            </figure>
        @endif

        <div class="prose prose-lg prose-slate max-w-none prose-a:text-blue-600 hover:prose-a:text-blue-500 prose-img:rounded-2xl">
            {!! $article->content !!}
        </div>

        <div class="mt-16 pt-8 border-t border-slate-200">
            <h3 class="font-bold text-slate-900 mb-4">Share this article</h3>
            <div class="flex gap-4">
                <button class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-blue-100 hover:text-blue-600 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                </button>
                <button class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-blue-100 hover:text-blue-600 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </button>
                <button class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-blue-100 hover:text-blue-600 transition-colors" onclick="window.print()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                </button>
            </div>
        </div>
    </article>
</div>
