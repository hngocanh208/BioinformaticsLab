<x-layout>
    <!-- Hero Section -->
    <section class="relative w-full h-[500px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img alt="Laboratory environment with beakers, DNA structures, and periodic table in purple and blue tones" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9EcklhZIbyT6Aa_ah_um-uz8EXZTJBZlQ0y9oGStm3UrTSgY7Pm7xuugeneShsPTK4j3SV0lPU-18SZoSlx5r5i8dydQt7YYCHqV7w5Gkh5L-rUixDOjcBMs88ctRctKJfnwkVGrkSU3HhNVMvno2jJtJ18Wo_b5J8pVZgc1lVZFVDmE7ZdqlJDPl3rVaqpRBckSOueb6DkAg45Op1wVN3fdFRELHzEbn8YDYmXMScRcd95dM34_5qgndzZX216VJl3_eATy5k3as"/>
            <div class="absolute inset-0 bg-black/40"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 flex flex-col justify-center h-full">
            <div class="max-w-4xl mr-auto text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight mb-6 drop-shadow-xl shadow-black">
                    {{ __('messages.advancing_discovery') }}<br/>
                    <span class="text-blue-200">{{ __('messages.through_computation') }}</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-50 mb-10 leading-relaxed font-light drop-shadow-lg shadow-black max-w-2xl">
                    {{ __('messages.hero_desc') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-start">
                    <a href="{{ route('research') }}" class="inline-flex justify-center px-8 py-3 bg-white text-primary font-bold rounded shadow-lg hover:bg-gray-100 transition transform hover:-translate-y-0.5 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary">
                        {{ __('messages.our_research') }}
                    </a>
                    <a href="{{ route('members') }}" class="inline-flex justify-center px-8 py-3 bg-transparent border-2 border-white text-white font-semibold rounded shadow-lg hover:bg-white/10 transition transform hover:-translate-y-0.5 focus:ring-2 focus:ring-blue-300">
                        {{ __('messages.meet_team') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section -->
    <section class="py-16 bg-background-light dark:bg-background-dark transition-colors duration-300">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 rounded-lg bg-gray-50 dark:bg-gray-800 shadow-sm border border-gray-100 dark:border-gray-700 transition-colors duration-300">
                    <div class="h-12 w-12 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mb-4 text-blue-600 dark:text-blue-400">
                        <span class="material-icons">biotech</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">{{ __('messages.feature_1_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-300">{{ __('messages.feature_1_desc') }}</p>
                </div>
                <div class="p-6 rounded-lg bg-gray-50 dark:bg-gray-800 shadow-sm border border-gray-100 dark:border-gray-700 transition-colors duration-300">
                    <div class="h-12 w-12 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mb-4 text-green-600 dark:text-green-400">
                        <span class="material-icons">computer</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">{{ __('messages.feature_2_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-300">{{ __('messages.feature_2_desc') }}</p>
                </div>
                <div class="p-6 rounded-lg bg-gray-50 dark:bg-gray-800 shadow-sm border border-gray-100 dark:border-gray-700 transition-colors duration-300">
                    <div class="h-12 w-12 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center mb-4 text-purple-600 dark:text-purple-400">
                        <span class="material-icons">groups</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">{{ __('messages.feature_3_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-300">{{ __('messages.feature_3_desc') }}</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
