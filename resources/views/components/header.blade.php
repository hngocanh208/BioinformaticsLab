<header class="bg-primary shadow-lg dark:bg-red-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-3xl font-black text-white tracking-wide">
                        BioLab
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden lg:flex space-x-6 items-center">
                @php
                    $links = [
                        ['name' => __('messages.home'), 'route' => 'home'],
                        ['name' => __('messages.research'), 'route' => 'research'],
                        ['name' => __('messages.projects'), 'route' => 'projects'],
                        ['name' => __('messages.news'), 'route' => 'news'],
                        ['name' => __('messages.technicals'), 'route' => 'technicals'],
                        ['name' => __('messages.members'), 'route' => 'members'],
                    ];
                @endphp

                @foreach ($links as $link)
                    @php
                        $isActive = request()->routeIs($link['route']);
                    @endphp
                    <a href="{{ route($link['route']) }}" 
                       class="text-white hover:text-gray-200 font-medium text-base transition duration-200 border-b-2 pb-1 {{ $isActive ? 'border-white' : 'border-transparent hover:border-white' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
            </div>

            <div class="flex items-center space-x-4 mt-4 lg:mt-0 w-full lg:w-auto justify-end">
                <!-- Search Bar -->
                <div class="hidden lg:block relative w-64">
                    <form action="{{ route('search') }}" method="GET" class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="material-icons text-gray-400 text-sm">search</span>
                        </span>
                        <input type="search" name="q" id="default-search" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border-none rounded-full focus:outline-none focus:ring-2 focus:ring-red-300 shadow-sm placeholder-gray-400 text-sm" placeholder="{{ __('messages.search') ?? 'Tìm kiếm...' }}" required>
                    </form>
                </div>
                
                <!-- Language Switcher -->
                <div class="relative group flex items-center text-white cursor-pointer hover:text-gray-200">
                    <span class="font-medium mr-1 uppercase">{{ app()->getLocale() }}</span>
                    <span class="material-icons text-sm">expand_more</span>
                    
                    <!-- Dropdown -->
                    <div class="absolute right-0 top-[100%] pt-2 w-24 hidden group-hover:block z-50 transition-opacity duration-200">
                        <div class="rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5">
                            <div class="py-1">
                                <a href="{{ route('language.switch', 'en') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 {{ app()->getLocale() === 'en' ? 'font-bold' : '' }}">EN</a>
                                <a href="{{ route('language.switch', 'vi') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 {{ app()->getLocale() === 'vi' ? 'font-bold' : '' }}">VI</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dark Mode Toggle Button -->
                <button id="theme-toggle" type="button" class="text-white focus:outline-none p-1 rounded-full hover:bg-red-700 dark:hover:bg-red-800 transition">
                    <span id="theme-icon" class="material-icons text-xl"></span>
                </button>

                <!-- Mobile menu button -->
                <div class="flex items-center lg:hidden ml-2">
                    <button type="button" class="text-white focus:outline-none">
                        <span class="material-icons text-3xl">menu</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    var themeIcon = document.getElementById('theme-icon');
    
    function updateThemeIcon() {
        if (document.documentElement.classList.contains('dark')) {
            themeIcon.innerText = 'dark_mode';
        } else {
            themeIcon.innerText = 'light_mode';
        }
    }
    
    // Initial load
    updateThemeIcon();

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }
        // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
        
        // Update the icon
        updateThemeIcon();
    });
</script>
