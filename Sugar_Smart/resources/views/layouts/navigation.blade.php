<nav x-data="{ open: false }" class="bg-[#FDF6E3] border-b border-gray-100">
    <!-- Bagian 10% untuk Logo -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-[10vh] bg-[#F5E1D1] flex items-center justify-center">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-12 w-auto fill-current text-gray-800" />
            </a>
        </div>
    </div>

    <!-- Bagian 80% untuk Navigation Links dan User Info -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-between h-[90vh] pt-10">
        <!-- Navigation Links -->
        <div class="flex flex-col items-center space-y-4 mb-12">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
            <!-- Add more nav links here if needed -->
        </div>

        <!-- User Info (Profile & Logout) -->
        <div class="flex flex-col items-center space-y-4 bg-white p-6 rounded-lg shadow-md w-full max-w-sm">
            <div class="font-medium text-lg text-gray-800 text-center">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500 text-center">{{ Auth::user()->email }}</div>

            <!-- Profile & Log Out, Sejajar di Tengah -->
            <div class="flex justify-center space-x-4 mt-4">
                <!-- Profile Edit Link -->
                <x-dropdown-link :href="route('profile.edit')" class="text-indigo-500 text-center px-4 py-2 whitespace-nowrap">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Log Out -->
                <form method="POST" action="{{ route('logout') }}" class="text-center">
                    @csrf
                    <x-dropdown-link :href="route('logout')" class="text-red-800 text-center px-4 py-2 whitespace-nowrap"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu for mobile -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            <x-responsive-nav-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-responsive-nav-link>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
</nav>
