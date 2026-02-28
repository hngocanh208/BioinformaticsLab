<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-700">
                        BioLab
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:-my-px sm:ms-10 sm:flex sm:space-x-8">
                @php
                    $links = [
                        ['name' => 'Home', 'route' => 'home'],
                        ['name' => 'Research', 'route' => 'research'],
                        ['name' => 'Projects', 'route' => 'projects'],
                        ['name' => 'News', 'route' => 'news'],
                        ['name' => 'Technicals', 'route' => 'technicals'],
                        ['name' => 'Members', 'route' => 'members'],
                    ];
                @endphp

                @foreach ($links as $link)
                    @php
                        $isActive = request()->routeIs($link['route']);
                    @endphp
                    <a href="{{ route($link['route']) }}" 
                       class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition-colors duration-200 {{ $isActive ? 'border-blue-500 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
            </div>
            
            <!-- Mobile menu button -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
