<x-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="mb-8 border-b border-gray-200 dark:border-gray-700 pb-5">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Search Results</h2>
            <p class="mt-2 text-lg text-gray-500 dark:text-gray-400">
                Showing results for: <span class="font-bold text-gray-900 dark:text-white">"{{ $query }}"</span>
            </p>
        </div>

        @if(count($results) > 0)
            <div class="space-y-6">
                @foreach($results as $result)
                    <a href="{{ $result['url'] ?? '#' }}" class="block group bg-white dark:bg-gray-800 p-6 rounded-lg shadow border border-gray-100 dark:border-gray-700 hover:shadow-lg hover:-translate-y-1 transition-all duration-200">
                        <span class="inline-block bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-300 text-xs px-2 py-1 rounded font-semibold mb-2">
                            {{ $result['type'] }}
                        </span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-red-600 dark:group-hover:text-red-400">{{ $result['title'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            {{ $result['desc'] }}
                        </p>
                    </a>
                @endforeach
            </div>
        @else
            <div class="text-center py-12 bg-gray-50 dark:bg-gray-800 rounded-lg border border-dashed border-gray-300 dark:border-gray-700">
                <svg class="mx-auto h-12 w-12 text-gray-400 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No results found</h3>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">We couldn't find anything matching "{{ $query }}". Please try again with different keywords.</p>
            </div>
        @endif
    </div>
</x-layout>
