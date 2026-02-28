<x-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="mb-12 border-b border-gray-200 dark:border-gray-700 pb-5 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">{{ __('messages.lab_news') }}</h2>
            <p class="mt-2 text-lg text-gray-500 dark:text-gray-400">{{ __('messages.stay_up_to_date') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($news as $article)
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow border border-gray-100 dark:border-gray-700 overflow-hidden flex flex-col h-full hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6 flex-grow">
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <time datetime="{{ $article['date'] }}">{{ \Carbon\Carbon::parse($article['date'])->format('M d, Y') }}</time>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">
                            <a href="#" class="hover:text-red-600 dark:hover:text-red-400 transition-colors">{{ $article['title'] }}</a>
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-base">
                            {{ $article['excerpt'] }}
                        </p>
                    </div>
                    <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700 border-t border-gray-100 dark:border-gray-600 mt-auto">
                        <a href="#" class="text-sm font-medium text-red-600 dark:text-red-400 hover:text-red-500 dark:hover:text-red-300">{{ __('messages.read_article') }} &rarr;</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
