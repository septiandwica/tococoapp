<div class="section-gap bg-brand-light">
    <div class="container-tococo">
        <!-- Hero Section for Careers -->
        <div class="text-center max-w-3xl mx-auto mb-20 animate-reveal">
            <h1 class="text-display mb-8">
                Discover Your Next <span class="text-brand-emerald">Great Opportunity</span>
            </h1>
            <p class="text-lg text-stone-600">We are always looking for passionate individuals to join our ecosystem. Browse our open positions and find where you belong.</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar Filters Placeholder -->
            <aside class="w-full lg:w-1/4">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-stone-200 sticky top-24">
                    <h2 class="text-lg font-bold text-stone-900 mb-4">Filters</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-stone-700 mb-1">Search</label>
                            <input type="text" placeholder="Job title or keyword" class="w-full rounded-lg border-stone-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2 px-3 border">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-stone-700 mb-1">Job Type</label>
                            <select class="w-full rounded-lg border-stone-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2 px-3 border bg-white">
                                <option>All Types</option>
                                <option>Full-time</option>
                                <option>Part-time</option>
                                <option>Contract</option>
                            </select>
                        </div>
                        <button class="w-full btn-tococo-primary">
                            Apply Filters
                        </button>
                    </div>
                </div>
            </aside>

            <!-- Job Listings -->
            <div class="w-full lg:w-3/4">
                <div class="bg-white rounded-2xl shadow-sm border border-stone-200 overflow-hidden">
                    <div class="px-6 py-5 border-b border-stone-200 bg-stone-50/50 flex justify-between items-center">
                        <h2 class="text-xl font-bold text-stone-900">Open Positions</h2>
                        <span class="text-sm font-medium text-brand-emerald bg-brand-emerald/10 px-3 py-1 rounded-full">{{ $jobs->total() }} Jobs</span>
                    </div>
                    
                    @if($jobs->isEmpty())
                        <div class="p-12 text-center">
                            <div class="w-16 h-16 bg-stone-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <h3 class="text-lg font-medium text-stone-900">No jobs available right now</h3>
                            <p class="mt-2 text-sm text-stone-500">Please check back later or modify your filters.</p>
                        </div>
                    @else
                        <ul class="divide-y divide-stone-200">
                            @foreach($jobs as $job)
                                <li>
                                    <a href="{{ route('career.show', $job->slug) }}" class="block p-6 hover:bg-stone-50 transition duration-150 group">
                                        <div class="flex items-center justify-between flex-wrap gap-4">
                                            <div class="flex-1 min-w-0">
                                                <h3 class="text-xl font-bold text-brand-charcoal group-hover:text-brand-emerald transition-colors truncate">
                                                    {{ $job->title }}
                                                </h3>
                                                <div class="mt-2 flex items-center gap-4 text-sm text-stone-500 flex-wrap">
                                                    <div class="flex items-center gap-1.5">
                                                        <svg class="w-4 h-4 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                                        <span class="font-medium text-stone-700">{{ $job->type ?? 'Full-time' }}</span>
                                                    </div>
                                                    <div class="flex items-center gap-1.5">
                                                        <svg class="w-4 h-4 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                        <span>{{ $job->location ?? 'Remote' }}</span>
                                                    </div>
                                                    <div class="flex items-center gap-1.5 text-xs">
                                                        <span class="bg-stone-100 text-stone-600 px-2 py-0.5 rounded">Posted {{ $job->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 flex items-center gap-3">
                                                <div class="hidden md:flex flex-col text-right">
                                                    <span class="text-sm font-semibold text-stone-900 border border-stone-200 px-3 py-1 rounded-lg">View Details</span>
                                                </div>
                                                <svg class="w-5 h-5 text-stone-300 group-hover:text-emerald-500 transform group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                
                <div class="mt-8">
                    {{ $jobs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
