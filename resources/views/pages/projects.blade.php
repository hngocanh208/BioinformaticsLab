<x-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="mb-12 border-b border-gray-200 dark:border-gray-700 pb-5">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">{{ __('messages.current_projects') }}</h2>
            <p class="mt-2 text-lg text-gray-500 dark:text-gray-400">{{ __('messages.discover_projects') }}</p>
        </div>

        <div class="space-y-12">
            @foreach($projects as $project)
                <div class="flex flex-col md:flex-row bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden border border-gray-100 dark:border-gray-700 items-stretch transition-shadow duration-300 hover:shadow-lg">
                    <div class="md:w-1/3 shrink-0 bg-gray-200 dark:bg-gray-700">
                        <img class="h-48 w-full object-cover md:h-full" src="{{ $project['image_url'] }}" alt="{{ $project['title'] }}">
                    </div>
                    <div class="p-8 md:w-2/3 flex flex-col justify-center">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="mt-1 text-2xl font-bold text-gray-900 dark:text-white">{{ $project['title'] }}</h3>
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium {{ $project['status'] === 'Completed' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300' : ($project['status'] === 'Ongoing' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300' : 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300') }}">
                                {{ $project['status'] }}
                            </span>
                        </div>
                        <p class="mt-4 text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                            {{ $project['description'] }}
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium text-sm flex items-center group">
                                {{ __('messages.view_details') }} 
                                <svg class="ml-1 w-4 h-4 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
