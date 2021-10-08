<div @click.away="open = false" class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark:text-gray-200 dark:bg-gray-800" x-data="{ open: false }">
    <div class="flex flex-row bg-blue-700 bg-opacity-75 items-center justify-between flex-shrink-0 px-8 py-4">
        <a href="{{  url('') }}" class="text-sm font-semibold tracking-widest text-white uppercase rounded-lg dark:text-white focus:outline-none focus:shadow-outline">{{ env('APP_TITLE') }}</a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow  pb-4 md:block md:pb-0 md:overflow-y-auto">
        <a href="{{ url('dashboard') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-400 dark:hover:bg-gray-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
        <span class="inline-flex justify-center items-center ml-4">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        </span>
        <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
        </a>
        <a href="{{ url('users') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-400 dark:hover:bg-gray-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
        <span class="inline-flex justify-center items-center ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
        </span>
        <span class="ml-2 text-sm tracking-wide truncate">Users</span>
        </a>
        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-400 dark:hover:bg-gray-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
        <span class="inline-flex justify-center items-center ml-4">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
        </span>
        <span class="ml-2 text-sm tracking-wide truncate">Portfolio</span>
        </a>
        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-400 dark:hover:bg-gray-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
        <span class="inline-flex justify-center items-center ml-4">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
        </span>
        <span class="ml-2 text-sm tracking-wide truncate">Portfolio</span>
        </a>
        <div class="px-5 hidden md:block">
                <div class="flex flex-row items-center mt-5 h-8">
                        <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                </div>
        </div>
        <a href="{{ url('settings') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-400 dark:hover:bg-gray-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
        <span class="inline-flex justify-center items-center ml-4">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
        </span>
        <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
        </a>
        <!--<div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex w-full flex-row items-center h-11 focus:outline-none hover:bg-blue-400 dark:hover:bg-gray-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Dropdown</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="z-50 absolute right-0 w-full origin-top-right">
                <div class="px-2 py-2 bg-white shadow dark:bg-gray-700">
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-white focus:text-gray-900 hover:bg-blue-400 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-white focus:text-gray-900 hover:bg-blue-400 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-white focus:text-gray-900 hover:bg-blue-400 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                </div>
            </div>
        </div>-->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
        <a href="javascript:void();" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-400 dark:hover:bg-gray-600 text-white-600 hover:text-white border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6" onclick="event.preventDefault(); this.closest('form').submit();">
        <span class="inline-flex justify-center items-center ml-4">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
        </span>
        <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
        </a>
        </form>
    </nav>
</div>
