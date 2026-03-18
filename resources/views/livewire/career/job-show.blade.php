<div class="bg-stone-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Navigation -->
        <a href="{{ route('career.index') }}" class="inline-flex items-center text-sm font-semibold text-emerald-600 hover:text-emerald-700 mb-8 transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to all jobs
        </a>

        <!-- Job Header Card -->
        <div class="bg-white rounded-3xl shadow-sm border border-stone-200 p-8 md:p-10 mb-8 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-50 rounded-full -translate-y-1/2 translate-x-1/3 blur-3xl opacity-50"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row md:items-start justify-between gap-6">
                <div>
                    <h1 class="text-3xl md:text-4xl font-black text-stone-900 tracking-tight mb-4">
                        {{ $job->title }}
                    </h1>
                    <div class="flex flex-wrap items-center gap-4 text-sm">
                        <span class="inline-flex items-center gap-1.5 font-medium text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-100">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            {{ $job->type ?? 'Full-time' }}
                        </span>
                        <span class="inline-flex items-center gap-1.5 text-stone-600 font-medium">
                            <svg class="w-4 h-4 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            {{ $job->location ?? 'Remote' }}
                        </span>
                        <span class="text-stone-400">Posted {{ $job->created_at->diffForHumans() }}</span>
                    </div>
                </div>
                <!-- Apply Button Trigger -->
                <div class="flex-shrink-0 mt-4 md:mt-0">
                    <button class="w-full md:w-auto text-center bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-8 rounded-xl shadow-lg shadow-emerald-200 transition-all transform hover:-translate-y-1">
                        Apply Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Job Details Content -->
        <div class="bg-white rounded-3xl shadow-sm border border-stone-200 p-8 md:p-12 mb-8 prose prose-stone prose-lg max-w-none prose-headings:font-bold prose-a:text-emerald-600 hover:prose-a:text-emerald-500">
            <h2 class="text-xl">About the Role</h2>
            <div class="text-stone-600 space-y-4">
                {!! $job->description !!}
            </div>

            <hr class="my-8 border-stone-100">

            <div class="bg-stone-50 rounded-2xl p-6 border border-stone-100">
                <h3 class="text-lg font-bold text-stone-900 mt-0">Ready to join us?</h3>
                <p class="text-base text-stone-600 mb-6">Click the apply button below to submit your application directly to our HR team.</p>
                <div class="flex justify-center sm:justify-start">
                    <button class="bg-stone-900 hover:bg-emerald-600 hover:shadow-lg transition-all text-white font-bold py-3 px-8 rounded-xl">
                        Submit Application
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
