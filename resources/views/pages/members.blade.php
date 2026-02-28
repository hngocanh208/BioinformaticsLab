<x-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">{{ __('messages.our_team') }}</h2>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-400 mx-auto">{{ __('messages.meet_minds') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($members as $member)
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden flex flex-col items-center p-6 transition-transform duration-300 hover:-translate-y-2 border border-transparent dark:border-gray-700">
                    <img class="w-32 h-32 rounded-full object-cover border-4 border-blue-50 dark:border-gray-700 mb-4 shadow-sm" src="{{ $member['avatar_url'] }}" alt="{{ $member['name'] }}">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">{{ $member['name'] }}</h3>
                    <span class="inline-block bg-blue-100 dark:bg-gray-700 text-blue-800 dark:text-blue-300 text-xs px-3 py-1 rounded-full font-semibold mb-3">
                        {{ $member['role'] }}
                    </span>
                    <p class="text-gray-600 dark:text-gray-400 text-sm text-center">
                        {{ $member['bio'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
