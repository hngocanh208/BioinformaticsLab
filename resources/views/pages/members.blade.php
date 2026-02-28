<x-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Our Team</h2>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">Meet the brilliant minds behind our research.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($members as $member)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col items-center p-6 transition-transform duration-300 hover:-translate-y-2">
                    <img class="w-32 h-32 rounded-full object-cover border-4 border-blue-50 mb-4 shadow-sm" src="{{ $member['avatar_url'] }}" alt="{{ $member['name'] }}">
                    <h3 class="text-lg font-bold text-gray-900 mb-1">{{ $member['name'] }}</h3>
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-semibold mb-3">
                        {{ $member['role'] }}
                    </span>
                    <p class="text-gray-600 text-sm text-center">
                        {{ $member['bio'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
