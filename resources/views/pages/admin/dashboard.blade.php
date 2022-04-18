<x-layouts.base>
    <div class="h-screen flex overflow-hidden bg-cool-gray-100" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
        <!-- Off-canvas menu for mobile -->
        <div x-show="sidebarOpen" class="md:hidden" style="display: none;">
            <div class="fixed inset-0 flex z-40">
                <div @click="sidebarOpen = false" x-show="sidebarOpen" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0" style="display: none;">
                    <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
                </div>
                <div x-show="sidebarOpen" x-description="Off-canvas menu, show/hide based on off-canvas menu state." x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800" style="display: none;">
                    <div class="absolute top-0 right-0 -mr-14 p-1">
                        <button x-show="sidebarOpen" @click="sidebarOpen = false" class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-gray-600" aria-label="Close sidebar" style="display: none;">
                            <svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                        <div class="flex-shrink-0 flex items-center px-4">
                            <img class="h-10 w-auto" src="/img/logo.png" alt="Ceisa Logo">
                        </div>
                        <nav class="mt-5 px-2 space-y-1">
                            <a href="/admin/" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-4 h-6 w-6 text-green-400 group-hover:text-green-300 group-focus:text-green-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                                </svg>
                                Home
                            </a>

                            <a href="/admin/dashboard" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Dashboard
                            </a>

                            <a href="/admin/ppftz" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-green-400 group-focus:text-green-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z"></path>
                                </svg>
                                PPFTZ
                            </a>

                            <a href="/admin/dokumen-ppjk" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-green-400 group-focus:text-green-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Dokumen PPJK
                            </a>

                            <a href="/admin/surat-kuasa" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-green-400 group-focus:text-green-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                                </svg>
                                Surat Kuasa
                            </a>

                            <a href="/admin/izin-impor" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-green-400 group-focus:text-green-300 ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Izin Impor - BP Kawasan
                            </a>

                            <a href="/admin/users" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>

                                User
                            </a>
                            
                            <a href="/admin/config" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Config
                            </a>
                        </nav>
                    </div>
                    <div class="flex-shrink-0 flex border-t border-green-700 p-4">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block h-10 w-auto rounded-full" src="/img/user-icon.png" alt="Profile Photo">
                            </div>

                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-gray-900">
                                    {{ Auth::user()->name }}
                                </p>

                                @if (Auth::user()->roles == "ADMIN")
                                        <a href="/" class="cursor-pointer text-xs leading-4 font-medium text-grey-500 hover:text-grey-200">
                                            Go to User Home
                                        </a>
                                @endif
                                <livewire:auth.logout/> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 w-14">
                    <!-- Force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 border-r border-gray-200 bg-gray-50">
                <div class="h-0 flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <img class="h-20 w-auto mb-4" src="/img/logo.png" alt="CEISA Logo">
                    </div>
                    <!-- Sidebar component, swap this element with another sidebar if you like -->
                    <nav class="mt-5 space-y-1 flex-1 px-2 bg-gray-50">
                        <a href="/admin" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                            </svg>
                            Home
                        </a>

                        <a href="/admin/dashboard" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Dashboard
                        </a>

                        <a href="/admin/ppftz" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z"></path>
                            </svg>

                            PPFTZ
                        </a>

                        <a href="/admin/surat-kuasa" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            
                            Dokumen PPJK
                        </a>
                        
                        <a href="/admin/surat-kuasa" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                            </svg>

                            Surat Kuasa
                        </a>


                        <a href="/admin/izin-impor" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Izin Impor - BP Kawasan
                        </a>

                        <a href="/admin/users" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>

                                User
                            </a>
                            
                            <a href="/admin/config" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Config
                            </a>

                        
                    </nav>
                </div>

                <div class="flex-shrink-0 flex border-t border-gray-200 bg-white p-4">
                   
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-10 w-auto rounded-full" src="/img/user-icon.png" alt="Profile Photo">
                        </div>

                        <div class="ml-3">
                            <p class="text-sm leading-5 font-medium text-gray-900">
                                {{ Auth::user()->name }}
                            </p>
                            @if (Auth::user()->roles == "ADMIN")
                                    <a href="/" class="cursor-pointer text-xs leading-4 font-medium text-grey-500 hover:text-grey-200">
                                        Go to User Home
                                    </a>
                            @endif
                            </p>
                            <livewire:auth.logout/> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                <button @click.stop="sidebarOpen = true" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150" aria-label="Open sidebar">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <main class="flex-1 relative z-0 overflow-y-auto pt-2 pb-6 focus:outline-none md:py-6" tabindex="0" x-data="" x-init="$el.focus()">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                    <div>
                        <h1 class="text-2xl font-semibold text-gray-900 mb-4">Dashboard</h1>
                            
                        <div class="grid grid-cols-3 gap-4">
                            <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-base font-bold text-gray-900 dark:text-white">PPFTZ Diajukan</h5>
                                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">{{ $ppftz_diajukan }}</p>
                            </div>

                            <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-base font-bold text-gray-900 dark:text-white">PPFTZ Disetujui</h5>
                                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">{{ $ppftz_setuju }}</p>
                            </div>

                            <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-base font-bold text-gray-900 dark:text-white">PPFTZ Ditolak</h5>
                                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">{{ $ppftz_ditolak }}</p>
                            </div>

                            <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-base font-bold text-gray-900 dark:text-white">Surat Kuasa Diajukan</h5>
                                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">{{ $kuasa_diajukan }}</p>
                            </div>

                            <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-base font-bold text-gray-900 dark:text-white">Surat Kuasa Disetujui</h5>
                                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">{{ $kuasa_setuju }}</p>
                            </div>

                            <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-base font-bold text-gray-900 dark:text-white">Surat Kuasa Ditolak</h5>
                                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">{{ $kuasa_ditolak }}</p>
                            </div>

                            <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-base font-bold text-gray-900 dark:text-white">Izin Impor Diajukan</h5>
                                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">{{ $impor_diajukan }}</p>
                            </div>

                            <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-base font-bold text-gray-900 dark:text-white">Izin Impor Disetujui</h5>
                                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">{{ $impor_setuju }}</p>
                            </div>

                            <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-2 text-base font-bold text-gray-900 dark:text-white">Izin Impor Ditolak</h5>
                                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">{{ $impor_ditolak }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <x-notification />
    </div>
</x-layouts.base>
