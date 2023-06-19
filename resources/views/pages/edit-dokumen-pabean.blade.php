
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- Tailwind UI -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">

    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/datepicker.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @livewireStyles
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@1.2.3/dist/trix.css">
</head>
<body class="antialiased font-sans bg-gray-200">
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
                            <a href="/" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-4 h-6 w-6 text-green-400 group-hover:text-green-300 group-focus:text-green-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                                </svg>
                                Home
                            </a>

                            <a href="/dashboard" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Dashboard
                            </a>

                            <a href="/ppftz" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-green-400 group-focus:text-green-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z"></path>
                                </svg>
                                PPFTZ
                            </a>

                            <a href="/dokumen-ppjk" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-green-400 group-focus:text-green-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Dokumen PPJK
                            </a>

                            <a href="/surat-kuasa" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-green-400 group-focus:text-green-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                                </svg>
                                Surat Kuasa
                            </a>

                            <a href="/izin-impor" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-green-400 group-focus:text-green-300 ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Izin Impor - BP Kawasan
                            </a>
                        </nav>
                    </div>
                    <div class="flex-shrink-0 flex border-t border-green-700 p-4">
                        <div class="flex-shrink-0 group block focus:outline-none">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block h-10 w-auto rounded-full" src="/img/user-icon.png" alt="">
                                </div>
                                <div class="ml-3">
                                    <p class="text-base leading-6 font-medium text-white">
                                        {{ Auth::user()->name}}
                                    </p>
                                    <livewire:auth.logout/> 
                                </div>
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
                        <a href="/" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                            </svg>
                            Home
                        </a>

                        <a href="/dashboard" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                                <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Dashboard
                            </a>

                        <a href="/ppftz" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z"></path>
                            </svg>

                            PPFTZ
                        </a>

                        <a href="/dokumen-ppjk" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            
                            Dokumen PPJK
                        </a>
                        
                        <a href="/surat-kuasa" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                            </svg>

                            Surat Kuasa
                        </a>


                        <a href="/izin-impor" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-white focus:outline-none focus:bg-gray-700 focus:text-white transition ease-in-out duration-150">
                            <svg class="mr-3 h-6 w-6 text-gray-900 group-focus:text-gray-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Izin Impor - BP Kawasan
                        </a>                       
                    </nav>
                </div>

                <div class="flex-shrink-0 flex border-t border-gray-200 bg-white p-4">
                    <div class="flex-shrink-0 w-full group block">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block h-10 w-auto rounded-full" src="/img/user-icon.png" alt="Profile Photo">
                            </div>

                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-gray-900">
                                    {{ Auth::user()->name}}
                                </p>

                                <livewire:auth.logout/> 
                            </div>
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
                        <h1 class="text-2xl font-semibold text-gray-900">Daftar Dokumen</h1></h1>
                            
                        
                        {{-- <div class="py-4 space-y-4"> --}}
                                
                                <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                                    <ul class="flex flex-wrap -mb-px">
                                        <li class="mr-2">
                                            <a href="{{ route('edit-pabean', $nomor_aju_pabean )}}" class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500" aria-current="page">Header</a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="{{ route('edit-dokumen', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" >Data Dokumen</a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="{{ route('edit-peti', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Data Peti Kemas</a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="{{ route('edit-kemasan', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Data Kemasan</a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="{{ route('edit-barang', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Data Barang</a>
                                        </li>

                                        <li class="mr-2">
                                            <a href="{{ route('print-index-pabean', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">PDF</a>
                                        </li>
                                    </ul>
                                </div>
                                <form action="{{ route('store-pabean') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                                @if(session()->has('message'))
                                                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                                                        <span class="font-medium">{{ session()->get('message') }}</span>
                                                    </div>
                                                    
                                                @endif
                                                <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Data Pengajuan<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-4 gap-2">
                                   
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="kantor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Kantor Pengajuan</label>
                                                            <x-input.select name="kantor_aju_pabean" id="kantor_aju_pabean">
                                                                @isset($items->kantor_aju_pabean)
                                                                    <option value="{{ $items->kantor_aju_pabean }}" selected>{{ $items->kantor_aju_pabean }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                
                                                                <option value="DIREKTORAT IKC">DIREKTORAT IKC</option>
                                                                <option value="KPPBC TMP B TANJUNG BALAI KARIMUN">KPPBC TMP B TANJUNG BALAI KARIMUN</option>
                                                                <option value="KPU BEA DAN CUKAI TIPE B BATAM">KPU BEA DAN CUKAI TIPE B BATAM</option>
                                                                <option value="KPPBC TMP B TANJUNG PINANG">KPPBC TMP B TANJUNG PINANG</option>
                                                                <option value="KPPBC TMP C SABANG">KPPBC TMP C SABANG</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="kategori_pemberitahuan" class="block text-sm font-medium text-gray-700 mb-4">Kategori Pemberitahuan</label>
                                                            <x-input.select name="kategori_pemberitahuan" id="kategori_pemberitahuan">
                                                                @isset($items->kategori_pemberitahuan)
                                                                    <option value="{{ $items->kategori_pemberitahuan }}" selected>{{ $items->kategori_pemberitahuan }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset

                                                                <option value="1 - Biasa">1 - Biasa</option>>
                                                                <option value="2- Berkala">2- Berkala</option>>
                                                            </x-input.select>
                                                        </div>

                                                        @if ($items->jenis_pemberitahuan == "Pengeluaran")
                                                            <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                                <label for="kategori_pemasukan" class="block text-sm font-medium text-gray-700 mb-4">Kategori Pengeluaran</label>
                                                                <x-input.select  name="kategori_pemasukan" id="kategori_pemasukan">
                                                                    @isset($items->kategori_pemasukan)
                                                                        <option value="{{ $items->kategori_pemasukan }}" selected>{{ $items->kategori_pemasukan }}</option>
                                                                    @else
                                                                        <option value="" selected>Belum Memilih</option>
                                                                    @endisset
                                                                    <option value="1 - Pengeluaran Biasa">1 - Pengeluaran Biasa</option>
                                                                    <option value="2 - Pengeluaran Khusus ke Luar Daerah Pabean">2 - Pengeluaran Khusus ke Luar Daerah Pabean</option>
                                                                    <option value="3 - Pengeluaran Sementara dari Kawasan Bebas">3 - Pengeluaran Sementara dari Kawasan Bebas</option>
                                                                    <option value="4 - Pengeluaran Kembali dari Kawasan Bebas">4 - Pengeluaran Kembali dari Kawasan Bebas</option>
                                                                </x-input.select>
                                                            </div>
                                                        @else
                                                            <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                                <label for="kategori_pemasukan" class="block text-sm font-medium text-gray-700 mb-4">Kategori Pemasukan</label>
                                                                <x-input.select  name="kategori_pemasukan" id="kategori_pemasukan">
                                                                    @isset($items->kategori_pemasukan)
                                                                        <option value="{{ $items->kategori_pemasukan }}" selected>{{ $items->kategori_pemasukan }}</option>
                                                                    @else
                                                                        <option value="" selected>Belum Memilih</option>
                                                                    @endisset
                                                                    <option value="1 - Pemasukan Biasa">1 - Pemasukan Biasa</option>
                                                                    <option value="2 - Pemasukan Sementara ke Kawasan Bebas">2 - Pemasukan Sementara ke Kawasan Bebas</option>
                                                                    <option value="3 - Pemasukan Kembali ke Kawasan Bebas">3 - Pemasukan Kembali ke Kawasan Bebas</option>
                                                                </x-input.select>
                                                            </div>
                                                        @endif
                                                        
                                                        
                                                        @if ($items->jenis_pemberitahuan == "Pengeluaran")
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="tujuan_pemasukan" class="block text-sm font-medium text-gray-700 mb-4">Tujuan Pengeluaran</label>
                                                            <x-input.select name="tujuan_pemasukan" id="tujuan_pemasukan">
                                                                @isset($items->tujuan_pemasukan)
                                                                    <option value="{{ $items->tujuan_pemasukan }}" selected>{{ $items->tujuan_pemasukan }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                <option value="1 - Dijual">1 - Dijual</option>
                                                                <option value="2 - Diperbaiki">2 - Diperbaiki</option>
                                                                <option value="3 - Direkomendasi">3 - Direkomendasi</option>
                                                                <option value="4 - Diuji">4 - Diuji</option>
                                                                <option value="5 - Diuji">5 - Dikalibrasi</option>
                                                                <option value="6 - Pengerjaan Proyek">6 - Pengerjaan Proyek</option>
                                                                <option value="7 - Keperluan peragaan atau demontrasi">7 - Keperluan peragaan atau demontrasi</option>
                                                                <option value="8 - Dikembalikan">8 - Dikembalikan</option>
                                                                <option value="20 - Lainnya">20 - Lainnya</option>
                                                            </x-input.select>
                                                        </div>
                                                        @else
                                                            <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                                <label for="tujuan_pemasukan" class="block text-sm font-medium text-gray-700 mb-4">Tujuan Pemasukan</label>
                                                                <x-input.select name="tujuan_pemasukan" id="tujuan_pemasukan">
                                                                    @isset($items->tujuan_pemasukan)
                                                                        <option value="{{ $items->tujuan_pemasukan }}" selected>{{ $items->tujuan_pemasukan }}</option>
                                                                    @else
                                                                        <option value="" selected>Belum Memilih</option>
                                                                    @endisset
                                                                    <option value="1 - Dijual">1 - Dijual</option>
                                                                    <option value="2 - Dipergunakan">2 - Dipergunakan</option>
                                                                    <option value="3 - Ditimbun sementara tanpa diolah">3 - Ditimbun sementara tanpa diolah</option>
                                                                    <option value="4 - Diolah">4 - Diolah</option>
                                                                    <option value="4 - Diolah">5 - Diperbaiki</option>
                                                                    <option value="4 - Diolah">6 - Dikembalikan</option>
                                                                    <option value="4 - Diolah">15 - Lainnya</option>
                                                                </x-input.select>
                                                            </div>
                                                        @endif

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="asal_barang" class="block text-sm font-medium text-gray-700 mb-4">Asal Barang</label>
                                                            <x-input.select name="asal_barang" id="asal_barang">
                                                                @isset($items->asal_barang)
                                                                    <option value="{{ $items->asal_barang }}" selected>{{ $items->asal_barang }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                <option value="1 - sepenuhnya diperoleh dan/atau diproduksi di luar Daerah Pabean">1 - sepenuhnya diperoleh dan/atau diproduksi di luar Daerah Pabean</option>
                                                                <option value="2 - sepenuhnya diperoleh dan/atau diproduksi di tempat lain dalam Daerah Pabean">2 - sepenuhnya diperoleh dan/atau diproduksi di tempat lain dalam Daerah Pabean</option>
                                                                <option value="3 - sepenuhnya diperoleh dan/atau diproduksi di Kawasan Bebas atau Kawasan Bebas lainnya dengan menggunakan bahan baku dan/atau">3 - Sepenuhnya diperoleh dan/atau diproduksi di Kawasan Bebas atau Kawasan Bebas lainnya dengan menggunakan bahan baku dan/atau</option>
                                                                @if ($items->jenis_pemberitahuan == "Pengeluaran")
                                                                    <option value="4 - sepenuhnya diperoleh dan/atau diproduksi di Tempat Penimbunan Berikat atau Kawasan Ekonomi Khusus">4 - sepenuhnya diperoleh dan/atau diproduksi di Tempat Penimbunan Berikat atau Kawasan Ekonomi Khusus</option>
                                                                @endif
                                                                <option value="5 - Lainnya">5 - Lainnya</option>
                                                            </x-input.select>
                                                        </div>
                                                        @if ($items->jenis_pemberitahuan == "Pengeluaran")
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="serah_barang" class="block text-sm font-medium text-gray-700 mb-4">Cara Penyerahan Barang</label>
                                                            <x-input.select name="serah_barang" id="serah_barang">
                                                                @isset($items->details->serah_barang)
                                                                    <option value="{{ $items->details->serah_barang }}" selected>{{ $items->details->serah_barang }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                <option value="CFR - Cost and Freight (named port of destination)">CFR - Cost and Freight (named port of destination)</option>
                                                                <option value="CIF - Cost, Insurance & Freight (named port of destination)">CIF - Cost, Insurance & Freight (named port of destination)</option>
                                                                <option value="CIP - Carriage and Insurance Paid To (named place of destination)">CIP - Carriage and Insurance Paid To (named place of destination)</option>
                                                                <option value="CPT - Carriage Paid To (named place of destination)">CPT - Carriage Paid To (named place of destination)</option>
                                                                <option value="DAP - Delivered At Place (named place of destination)">DAP - Delivered At Place (named place of destination)</option>
                                                                <option value="DAT - Delivered At Terminal (named terminal at port of place of destination)">DAT - Delivered At Terminal (named terminal at port of place of destination)</option>
                                                                <option value="DDP - Delivered Duty Paid (named place of destination)">DDP - Delivered Duty Paid (named place of destination)</option>
                                                                <option value="EXW - Ex Works (named place of delivery)">EXW - Ex Works (named place of delivery)</option>
                                                                <option value="FAS - Free Alongside Ship (named port of shipment)">FAS - Free Alongside Ship (named port of shipment)</option>
                                                                <option value="FCA - Free Carrier (named place of delivery)">FCA - Free Carrier (named place of delivery)</option>
                                                                <option value="FOB - Free On Board (named port of terminal)">FOB - Free On Board (named port of terminal)</option>
                                                            </x-input.select>
                                                        </div>
                                                        @endif


                                                        @if ($items->jenis_pemberitahuan == "Pengeluaran")
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="cara_bayar" class="block text-sm font-medium text-gray-700 mb-4">Cara Pembayaran</label>
                                                            <x-input.select name="cara_bayar" id="cara_bayar">
                                                                @isset($items->details->cara_bayar)
                                                                    <option value="{{ $items->details->cara_bayar }}" selected>{{ $items->details->cara_bayar }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                <option value="01 - tunai/biasa">01 - tunai/biasa</option>
                                                                <option value="02 - berkala">02 - berkala</option>
                                                                <option value="03 - jaminan">03 - jaminan</option>
                                                                <option value="04 - lainnya">04 - lainnya</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="hidden px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nomor_aju_pabean" id="nomor_aju_pabean" value="{{ $nomor_aju_pabean }}" placeholder="" />
                                                        </div>
                                                        @endif

                                                        {{-- @if ($items->jenis_pemberitahuan == "Pemasukan")
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="jenis_faktur" class="block text-sm font-medium text-gray-700 mb-4">Jenis Faktur</label>
                                                            <x-input.select name="jenis_faktur" id="jenis_faktur">
                                                                @isset($items->jenis_faktur)
                                                                    <option value="{{ $items->jenis_faktur }}" selected>{{ $items->jenis_faktur }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                <option value="Non-Faktur">Non-Faktur</option>
                                                                <option value="FP-01">FP-01</option>
                                                                <option value="FP-07">FP-07</option>
                                                                <option value="Dipersamakan Dengan Faktur">Dipersamakan Dengan Faktur</option>
                                                            </x-input.select>
                                                        </div> --}}

                                                        <div class="hidden px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nomor_aju_pabean" id="nomor_aju_pabean" value="{{ $nomor_aju_pabean }}" placeholder="" />
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Identitas Pengirim/Penerima/Pembeli/Penjual/PPJK<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="jenis_identitas_pengirim" class="block text-sm font-medium text-gray-700 mb-4">Jenis Identitas Pengirim</label>
                                                            <x-input.select name="jenis_identitas_pengirim" id="jenis_identitas_pengirim">
                                                                @isset($items->jenis_identitas_pengirim)
                                                                    <option value="{{ $items->jenis_identitas_pengirim }}" selected>{{ $items->jenis_identitas_pengirim }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                <option value="2 - Passport">2 - Passport</option>
                                                                <option value="3 - KTP">3 - KTP</option>
                                                                <option value="4 - Lainnya">4 - Lainnya</option>
                                                                <option value="5 - NPWP 15 Digit">5 - NPWP 15 Digit</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_identitas_pengirim" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas Pengirim</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nomor_identitas_pengirim" id="nomor_identitas_pengirim" @isset($items->nama_pengirim) value="{{ $items->nomor_identitas_pengirim }}" @endisset placeholder="Nomor Identitas" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nama_pengirim" class="block text-sm font-medium text-gray-700 mb-4">Nama Pengirim</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nama_pengirim" id="nama_pengirim" @isset($items->nama_pengirim) value="{{ $items->nama_pengirim }}" @endisset placeholder="Nama Pengirim" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="alamat_pengirim" class="block text-sm font-medium text-gray-700 mb-4">Alamat Pengirim</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="alamat_pengirim" id="alamat_pengirim" @isset($items->alamat_pengirim) value="{{ $items->alamat_pengirim }}" @endisset placeholder="Alamat Pengirim" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="ijin_bpk_pengirim" class="block text-sm font-medium text-gray-700 mb-4">Nomor ijin Bpk Pengirim</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="ijin_bpk_pengirim" id="ijin_bpk_pengirim" @isset($items->details->ijin_bpk_pengirim) value="{{ $items->details->ijin_bpk_pengirim }}" @endisset placeholder="Nomor Ijin BPK Pengirim" />
                                                        </div>
                                                        

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="tanggal_ijin_bpk_pengirim" class="block text-sm font-medium text-gray-700 mb-4">Tanggal Ijin BPK Pengirim</label>
                                                            
                                                            <div class="relative">
                                                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                                                </div>
                                                                
                                                                <input datepicker datepicker-buttons datepicker-format="yyyy-mm-dd" autocomplete="off" type="text" name="tanggal_ijin_bpk_pengirim" @isset($items->details->tanggal_ijin_bpk_pengirim) value="{{ $items->details->tanggal_ijin_bpk_pengirim }}" @endisset class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih tanggal">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Penerima<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="jenis_identitas_penerima" class="block text-sm font-medium text-gray-700 mb-4">Jenis Identitas Penerima</label>
                                                            <x-input.select name="jenis_identitas_penerima" id="jenis_identitas_penerima">
                                                                @isset($items->jenis_identitas_penerima)
                                                                    <option value="{{ $items->jenis_identitas_penerima }}" selected>{{ $items->jenis_identitas_penerima }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                <option value="2 - Passport">2 - Passport</option>
                                                                <option value="3 - KTP">3 - KTP</option>
                                                                <option value="4 - Lainnya">4 - Lainnya</option>
                                                                <option value="5 - NPWP 15 Digit">5 - NPWP 15 Digit</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_identitas_penerima" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas Penerima</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nomor_identitas_penerima"  id="nomor_identitas_penerima" @isset($items->nomor_identitas_penerima) value="{{ $items->nomor_identitas_penerima }}" @endisset placeholder="Nomor Identitas" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nama_penerima" class="block text-sm font-medium text-gray-700 mb-4">Nama Penerima</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nama_penerima"  id="nama_penerima" @isset($items->nama_penerima) value="{{ $items->nama_penerima }}" @endisset placeholder="Nama Penerima" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="alamat_penerima" class="block text-sm font-medium text-gray-700 mb-4">Alamat Penerima</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="alamat_penerima"  id="alamat_penerima" @isset($items->alamat_penerima) value="{{ $items->alamat_penerima }}" @endisset placeholder="Nomor Pengajuan" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="negara_penerima" class="block text-sm font-medium text-gray-700 mb-4">Negara Penerima</label>
                                                            
                                                            <x-input.select class="negara_penerima" name="negara_penerima" id="negara_penerima">
                                                                @isset($items->details->negara_penerima)
                                                                    <option value="{{ $items->details->negara_penerima }}" selected>{{ $items->details->negara_penerima }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->code }} - {{ $country->name }}">{{ $country->code }} - {{ $country->name }}</option>
                                                                @endforeach
                                                            </x-input.select>
                                                        </div>

                                                    </div>

                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Pembeli<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="jenis_identitas_pembeli" class="block text-sm font-medium text-gray-700 mb-4">Jenis Identitas Pembeli</label>
                                                            <x-input.select name="jenis_identitas_pembeli" id="jenis_identitas_pembeli">
                                                                @isset($items->details->jenis_identitas_pembeli)
                                                                    <option value="{{ $items->details->jenis_identitas_pembeli }}" selected>{{ $items->details->jenis_identitas_pembeli }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                <option value="2 - Passport">2 - Passport</option>
                                                                <option value="3 - KTP">3 - KTP</option>
                                                                <option value="4 - Lainnya">4 - Lainnya</option>
                                                                <option value="5 - NPWP 15 Digit">5 - NPWP 15 Digit</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_identitas_pembeli" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas Pembeli</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nomor_identitas_pembeli"  id="nomor_identitas_pembeli" @isset($items->details->nomor_identitas_pembeli) value="{{ $items->details->nomor_identitas_pembeli }}" @endisset placeholder="Nomor Identitas" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nama_pembeli" class="block text-sm font-medium text-gray-700 mb-4">Nama Pembeli</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nama_pembeli"  id="nama_pembeli" @isset($items->details->nama_pembeli) value="{{ $items->details->nama_pembeli }}" @endisset placeholder="Nama Pembeli" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="alamat_pembeli" class="block text-sm font-medium text-gray-700 mb-4">Alamat Pembeli</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="alamat_pembeli"  id="alamat_pembeli" @isset($items->details->alamat_pembeli) value="{{ $items->details->alamat_pembeli }}" @endisset placeholder="Alamat Pembeli" />
                                                        </div>

                                                        <div class="px-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="negara_pembeli" class="block text-sm font-medium text-gray-700 mb-4">Negara Pembeli</label>
                                                            
                                                            <x-input.select class="negara_pembeli" name="negara_pembeli" id="negara_pembeli">
                                                                @isset($items->details->negara_pembeli)
                                                                    <option value="{{ $items->details->negara_pembeli }}" selected>{{ $items->details->negara_pembeli }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->code }} - {{ $country->name }}">{{ $country->code }} - {{ $country->name }}</option>
                                                                @endforeach
                                                            </x-input.select>
                                                        </div>

                                                    </div>

                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Penjual<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="jenis_identitas_penjual" class="block text-sm font-medium text-gray-700 mb-4">Jenis Identitas Penjual</label>
                                                            <x-input.select name="jenis_identitas_penjual" id="jenis_identitas_penjual">
                                                                @isset($items->details->jenis_identitas_penjual)
                                                                    <option value="{{ $items->details->jenis_identitas_penjual }}" selected>{{ $items->details->jenis_identitas_penjual }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                <option value="2 - Passport">2 - Passport</option>
                                                                <option value="3 - KTP">3 - KTP</option>
                                                                <option value="4 - Lainnya">4 - Lainnya</option>
                                                                <option value="5 - NPWP 15 Digit">5 - NPWP 15 Digit</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_identitas_penjual" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas Penjual</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nomor_identitas_penjual"  id="nomor_identitas_penjual" @isset($items->details->nomor_identitas_penjual) value="{{ $items->details->nomor_identitas_penjual }}" @endisset placeholder="Nomor Identitas" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nama_penjual" class="block text-sm font-medium text-gray-700 mb-4">Nama Penjual</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nama_penjual"  id="nama_penjual" @isset($items->details->nama_penjual) value="{{ $items->details->nama_penjual }}" @endisset placeholder="Nama Penjual" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="alamat_penjual" class="block text-sm font-medium text-gray-700 mb-4">Alamat Penjual</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="alamat_penjual"  id="alamat_penjual" @isset($items->details->alamat_penjual) value="{{ $items->details->alamat_penjual }}" @endisset placeholder="Alamat Penjual" />
                                                        </div>

                                                        <div class="px-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="negara_penjual" class="block text-sm font-medium text-gray-700 mb-4">Negara Penjual</label>
                                                            
                                                            <x-input.select class="negara_penjual" name="negara_penjual" id="negara_penjual">
                                                                @isset($items->details->negara_penjual)
                                                                    <option value="{{ $items->details->negara_penjual }}" selected>{{ $items->details->negara_penjual }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->code }} - {{ $country->name }}">{{ $country->code }} - {{ $country->name }}</option>
                                                                @endforeach
                                                            </x-input.select>
                                                        </div>
                                                    </div>

                                                    @if ($items->pengajuan_sebagai == "PPJK")
                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>PPJK<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-3 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="npwp_ppjk" class="block text-sm font-medium text-gray-700 mb-4">NPWP PPJK</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="npwp_ppjk"  id="npwp_ppjk" @isset($items->npwp_ppjk) value="{{ $items->npwp_ppjk }}" @endisset placeholder="NPWP PPJK" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nama_ppjk" class="block text-sm font-medium text-gray-700 mb-4">Nama PPJK</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nama_ppjk"  id="nama_ppjk" @isset($items->nama_ppjk) value="{{ $items->nama_ppjk }}" @endisset placeholder="Nama PPJK" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="alamat_ppjk" class="block text-sm font-medium text-gray-700 mb-4">Alamat PPJK</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="alamat_ppjk"  id="alamat_ppjk" @isset($items->alamat_ppjk) value="{{ $items->alamat_ppjk }}" @endisset placeholder="Alamat PPJK" />
                                                        </div>
                                                    </div>
                                                    @endif

                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Data Transaksi Perdagangan<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-3 gap-2">
                                                        {{-- <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nilai_barang" class="block text-sm font-medium text-gray-700 mb-4">Nilai Barang (IDR)</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nilai_barang" type="number" @isset($items->nilai_barang) value="{{ $items->nilai_barang }}" @endisset min="0" id="nilai_barang" placeholder="Nilai Barang" />
                                                        </div> --}}

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="transaksi" class="block text-sm font-medium text-gray-700 mb-4">Transaksi</label>
                                                            <x-input.select class="transaksi" name="transaksi" id="transaksi">
                                                                @isset($items->details->transaksi)
                                                                    <option value="{{ $items->details->transaksi }}" selected>{{ $items->details->transaksi }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                
                                                                <option value="01 - Pembayaran di muka (advanced payment)">01 - Pembayaran di muka (advanced payment)</option>
                                                                <option value="02 - Pembayaran kemudian (open payment) secara bertahap">02 - Pembayaran kemudian (open payment) secara bertahap</option>
                                                                <option value="03 - Pembayaran kemudian (open payment) secara tunai">03 - Pembayaran kemudian (open payment) secara tunai</option>
                                                                <option value="04 - Sight Letter of Credit">04 - Sight Letter of Credit</option>
                                                                <option value="05 - Usance Letter of Credit">05 - Usance Letter of Credit</option>
                                                                <option value="06 - Red Clause Letter of Credit">06 - Red Clause Letter of Credit</option>
                                                                <option value="07 - Inkaso (collection draft)">07 - Inkaso (collection draft)</option>
                                                                <option value="08 - Konsinyasi (consignment)">08 - Konsinyasi (consignment)</option>
                                                                <option value="09 - Inter Company Account (ICA)">09 - Inter Company Account (ICA)</option>
                                                                <option value="10 - Pembayaran tunai di Dalam Negeri">10 - Pembayaran tunai di Dalam Negeri</option>
                                                                <option value="11 - Telegraph Transfer (T/T) di Dalam Negeri">11 - Telegraph Transfer (T/T) di Dalam Negeri</option>
                                                                <option value="12 - Imbal Dagang (IMB)">12 - Imbal Dagang (IMB)</option>
                                                                <option value="13 - Tanpa Pembayaran">13 - Tanpa Pembayaran</option>
                                                                <option value="14 - Lainnya">14 - Lainnya</option>
                                                            </x-input.select>
                                                        </div>
                                                        

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="transaksi_valuta" class="block text-sm font-medium text-gray-700 mb-4">Valuta</label>
                                                            <x-input.select class="transaksi_valuta" name="transaksi_valuta" id="transaksi_valuta">
                                                                @isset($items->details->transaksi_valuta)
                                                                    <option value="{{ $items->details->transaksi_valuta }}" selected>{{ $items->details->transaksi_valuta }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                @foreach ($valutas as $valuta)
                                                                    <option value="{{ $valuta->code}}">{{ $valuta->code}} - {{ $valuta->name }}</option>
                                                                @endforeach
                                                            </x-input.select>
                                                        </div>

                                                        
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="transaksi_kurs" class="block text-sm font-medium text-gray-700 mb-4">NDPBM/Kurs</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="transaksi_kurs" type="number" @isset($items->details->transaksi_kurs) value="{{ $items->details->transaksi_kurs }}" @endisset min="0" id="kurs" placeholder="NDPBM/Kurs" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="transaksi_fob" class="block text-sm font-medium text-gray-700 mb-4">FOB</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="transaksi_fob" type="number" @isset($items->details->transaksi_fob) value="{{ $items->details->transaksi_fob }}" @endisset min="0" id="kurs" placeholder="FOB" />
                                                        </div>
                                                        @if ($items->jenis_pemberitahuan == "Pemasukan")
                                                            <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                                <label for="transaksi_cif" class="block text-sm font-medium text-gray-700 mb-4">CIF</label>
                                                                <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="transaksi_cif" type="number" @isset($items->details->transaksi_cif) value="{{ $items->details->transaksi_cif }}" @endisset min="0" id="kurs" placeholder="CIF" />
                                                            </div>

                                                            <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                                <label for="transaksi_voluntary" class="block text-sm font-medium text-gray-700 mb-4">Voluntary Declaration</label>
                                                                <x-input.select class="transaksi_voluntary" name="transaksi_voluntary" id="jenis_asuransi">
                                                                    @isset($items->details->transaksi_voluntary)
                                                                        <option value="{{ $items->details->transaksi_voluntary }}" selected>{{ $items->details->transaksi_voluntary }}</option>
                                                                    @else
                                                                        <option value="" selected>Belum Memilih</option>
                                                                    @endisset
                                                                    
                                                                    <option value="1 - Dalam Negeri">Iya</option>
                                                                    <option value="2 - Luar Negeri">Tidak</option>
                                                                </x-input.select>
                                                            </div>
                                                        @endif

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="transaksi_freight" class="block text-sm font-medium text-gray-700 mb-4">Freight</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="transaksi_freight" type="number" @isset($items->details->transaksi_freight) value="{{ $items->details->transaksi_freight }}" @endisset min="0" id="kurs" placeholder="Freight" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="jenis_asuransi" class="block text-sm font-medium text-gray-700 mb-4">Jenis Asuransi</label>
                                                            <x-input.select class="jenis_asuransi" name="jenis_asuransi" id="jenis_asuransi">
                                                                @isset($items->details->jenis_asuransi)
                                                                    <option value="{{ $items->details->jenis_asuransi }}" selected>{{ $items->details->jenis_asuransi }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                
                                                                <option value="1 - Dalam Negeri">1 - Dalam Negeri</option>
                                                                <option value="2 - Luar Negeri">2 - Luar Negeri</option>
                                                            </x-input.select>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="transaksi_asuransi" class="block text-sm font-medium text-gray-700 mb-4">Asuransi</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="transaksi_asuransi" type="number" @isset($items->details->transaksi_asuransi) value="{{ $items->details->transaksi_asuransi }}" @endisset min="0" id="transaksi_asuransi" placeholder="Asuransi" />
                                                        </div>

                                                        @if ($items->jenis_pemberitahuan == "Pengeluaran")
                                                            <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                                <label for="transaksi_maklon" class="block text-sm font-medium text-gray-700 mb-4">Nilai Maklon (IDR)</label>
                                                                <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="transaksi_maklon" type="number" @isset($items->details->transaksi_maklon) value="{{ $items->details->transaksi_maklon }}" @endisset min="0" id="transaksi_maklon" placeholder="Nilai Maklon (IDR)" />
                                                            </div>
                                                        
                                                        


                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="transaksi_curah" class="block text-sm font-medium text-gray-700 mb-4">Curah/Non Curah</label>
                                                            <x-input.select class="transaksi_curah" name="transaksi_curah" id="transaksi_curah">
                                                                @isset($items->details->transaksi_curah)
                                                                    <option value="{{ $items->details->transaksi_curah }}" selected>{{ $items->details->transaksi_curah }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                
                                                                <option value="Curah">Curah</option>
                                                                <option value="Non Curah">Non Curah</option>
                                                            </x-input.select>

                                                            <label for="transaksi_sawit" class="block text-sm font-medium text-gray-700 mb-4">*Hanya untuk produk Sawit dan turunannya</label>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="transaksi_sawit" class="block text-sm font-medium text-gray-700 mb-4">Dana Pungutan Sawit</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="transaksi_sawit" type="number" @isset($items->details->transaksi_sawit) value="{{ $items->details->transaksi_sawit }}" @endisset min="0" id="transaksi_sawit" placeholder="Dana Pungutan Sawit" />
                                                            <label for="transaksi_sawit" class="block text-sm font-medium text-gray-700 mb-4">*Hanya untuk produk Sawit dan turunannya</label>
                                                        </div>
                                                        @endif

                                                    </div>
                                                    @if ($items->jenis_pemberitahuan == "Pemasukan")
                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Data Dokumen Pelengkap Pabean<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-5 gap-2">
                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nilai_bc11" class="block text-sm font-medium text-gray-700 mb-4">Nilai Bc11</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nilai_bc11" id="nilai_bc11" @isset($items->nilai_bc11) value="{{ $items->nilai_bc11 }}" @endisset type="number" min="0" placeholder="Nilai BC11" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="tanggal_bc11" class="block text-sm font-medium text-gray-700 mb-4">Tanggal Bc11</label>
                                                            
                                                            <div class="relative">
                                                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                                                </div>
                                                                
                                                                <input datepicker datepicker-buttons datepicker-format="yyyy-mm-dd" autocomplete="off" type="text" name="tanggal_bc11" @isset($items->tanggal_bc11) value="{{ $items->tanggal_bc11 }}" @endisset class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih tanggal">
                                                            </div>
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="pos_bc11" class="block text-sm font-medium text-gray-700 mb-4">Pos Bc11</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="pos_bc11" id="pos_bc11" @isset($items->pos_bc11) value="{{ $items->pos_bc11 }}" @endisset placeholder="Pos BC11" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="subpos_bc11" class="block text-sm font-medium text-gray-700 mb-4">Subpos Bc11</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="subpos_bc11" id="subpos_bc11" @isset($items->subpos_bc11) value="{{ $items->subpos_bc11 }}" @endisset placeholder="Subpos Bc11" />
                                                        </div>

                                                        <div class="px-6 pt-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="subsubpos_bc11" class="block text-sm font-medium text-gray-700 mb-4">Subsubpos Bc11</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="subsubpos_bc11" id="subsubpos_bc11" @isset($items->subsubpos_bc11) value="{{ $items->subsubpos_bc11 }}" @endisset placeholder="Subsubpos Bc11" />
                                                        </div>
                                                    </div>

                                                    
                                                        
                                                    @endif

                                                    <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                        <p>Data Pengangkutan<p>
                                                        <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                    </div>

                                                    <div class="grid grid-cols-4 gap-2">
                                                        <div class="p-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="cara_angkut" class="block text-sm font-medium text-gray-700 mb-4">Cara Angkut</label>
                                                            <x-input.select class="cara_angkut" name="cara_angkut" id="cara_angkut">
                                                                @isset($items->cara_angkut)
                                                                    <option value="{{ $items->cara_angkut }}" selected>{{ $items->cara_angkut }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                @foreach ($cara_angkuts as $cara_angkut)
                                                                    <option value="{{ $cara_angkut->cara}}">{{ $cara_angkut->cara }}</option>
                                                                @endforeach
                                                            </x-input.select>
                                                        </div>

                                                        <div class="p-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nama_angkut" class="block text-sm font-medium text-gray-700 mb-4">Nama Pengangkut</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nama_angkut" id="nama_angkut" @isset($items->nama_angkut) value="{{ $items->nama_angkut }}" @endisset placeholder="Nama Pengangkut" />
                                                        </div>

                                                        <div class="p-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="bendera" class="block text-sm font-medium text-gray-700 mb-4">Bendera</label>
                                                            <x-input.select class="bendera" name="bendera" id="bendera">
                                                                @isset($items->bendera)
                                                                    <option value="{{ $items->bendera }}" selected>{{ $items->bendera }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->code }} - {{ $country->name }}">{{ $country->code }} - {{ $country->name }}</option>
                                                                @endforeach
                                                            </x-input.select>
                                                        </div>

                                                        <div class="p-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="nomor_voy_flight_pol" class="block text-sm font-medium text-gray-700 mb-4">Nomor Voy Flight Pol</label>
                                                            <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nomor_voy_flight_pol" id="nomor_voy_flight_pol" @isset($items->nomor_voy_flight_pol) value="{{ $items->nomor_voy_flight_pol }}" @endisset placeholder="Nomor Voy Flight Pol" />
                                                        </div>

                                                        <div class="px-6 text-grey-darker text-justify flex flex-col">
                                                            <label for="negara_tujuan" class="block text-sm font-medium text-gray-700 mb-4">Negara Tujuan</label>
                                                            
                                                            <x-input.select class="negara_tujuan" name="negara_tujuan" id="negara_tujuan">
                                                                @isset($items->details->negara_tujuan)
                                                                    <option value="{{ $items->details->negara_tujuan }}" selected>{{ $items->details->negara_tujuan }}</option>
                                                                @else
                                                                    <option value="" selected>Belum Memilih</option>
                                                                @endisset
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->code }} - {{ $country->name }}">{{ $country->code }} - {{ $country->name }}</option>
                                                                @endforeach
                                                            </x-input.select>
                                                        </div>
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-2">
                                                        <div class="wrap">
                                                            <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                                <p>Data Pelabuhan Muat dan Bongkar<p>
                                                                <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                            
                                                            </div>

                                                            

                                                            <div class="grid grid-cols-1 gap-2">
                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="pelabuhan_muat" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Muat</label>
                                                                    <x-input.select class="pelabuhan_muat" name="pelabuhan_muat" id="pelabuhan_muat">
                                                                        @isset($items->pelabuhan_muat)
                                                                            <option value="{{ $items->pelabuhan_muat }}" selected>{{ $items->pelabuhan_muat }}</option>
                                                                        @else
                                                                            <option value="" selected>Belum Memilih</option>
                                                                        @endisset
                                                                        @foreach ($pelabuhans as $pelabuhan)
                                                                            <option value="{{ $pelabuhan->code }} - {{ $pelabuhan->name }}">{{ $pelabuhan->code }} - {{ $pelabuhan->name }}</option>
                                                                        @endforeach
                                                                    </x-input.select>
                                                                </div>
                                                                
                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="pelabuhan_tujuan" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Tujuan</label>
                                                                    <x-input.select class="pelabuhan_tujuan" name="pelabuhan_tujuan" id="pelabuhan_tujuan">
                                                                        @isset($items->pelabuhan_tujuan)
                                                                            <option value="{{ $items->pelabuhan_tujuan }}" selected>{{ $items->pelabuhan_tujuan }}</option>
                                                                        @else
                                                                            <option value="" selected>Belum Memilih</option>
                                                                        @endisset
                                                                        @foreach ($pelabuhans as $pelabuhan)
                                                                            <option value="{{ $pelabuhan->code }} - {{ $pelabuhan->name }}">{{ $pelabuhan->code }} - {{ $pelabuhan->name }}</option>
                                                                        @endforeach
                                                                    </x-input.select>
                                                                </div>

                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="pelabuhan_transit" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Transit</label>
                                                                    <x-input.select class="pelabuhan_transit" name="pelabuhan_transit" id="pelabuhan_transit">
                                                                        @isset($items->pelabuhan_transit)
                                                                            <option value="{{ $items->pelabuhan_transit }}" selected>{{ $items->pelabuhan_transit }}</option>
                                                                        @else
                                                                            <option value="" selected>Belum Memilih</option>
                                                                        @endisset
                                                                        @foreach ($pelabuhans as $pelabuhan)
                                                                            <option value="{{ $pelabuhan->code }} - {{ $pelabuhan->name }}">{{ $pelabuhan->code }} - {{ $pelabuhan->name }}</option>
                                                                        @endforeach
                                                                    </x-input.select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wrap">
                                                            <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                                <p>Data Berat dan Volume<p>
                                                                <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                            </div>

                                                            <div class="grid grid-cols-1 gap-2">
                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="berat_bersih" class="block text-sm font-medium text-gray-700 mb-4">Berat Bersih Total (KGM)</label>
                                                                    <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="number" name="berat_bersih" id="berat_bersih" @isset($items->berat_bersih) value="{{ $items->berat_bersih }}" @endisset placeholder="Berat Bersih" />
                                                                </div>

                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="berat_kotor" class="block text-sm font-medium text-gray-700 mb-4">Berat Kotor Total (KGM)</label>
                                                                    <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="number" name="berat_kotor" id="berat_kotor" @isset($items->berat_kotor) value="{{ $items->berat_kotor }}" @endisset placeholder="Berat Kotor" />
                                                                </div>

                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="volume" class="block text-sm font-medium text-gray-700 mb-4">Volume (M<sup>3</sup>)</label>
                                                                    <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="number" name="volume" id="volume" @isset($items->volume) value="{{ $items->volume }}" @endisset placeholder="Volume" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wrap">
                                                            <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                                <p>Data Perkiraan Tanggal<p>
                                                                <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                            </div>

                                                            <div class="grid grid-cols-1 gap-2">
                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Perkiraan Tanggal Pemasukan</label>
                                                                    <div class="relative">
                                                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                                                        </div>
                                                                        
                                                                        <input datepicker datepicker-buttons datepicker-format="yyyy-mm-dd" autocomplete="off" type="text" name="perkiraan_tanggal_pemasukan" @isset($items->perkiraan_tanggal_pemasukan) value="{{ $items->perkiraan_tanggal_pemasukan }}" @endisset class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih tanggal">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wrap">
                                                            <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                                <p>Data Peti Kemas dan Pengemas<p>
                                                                <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                            </div>

                                                            <div class="grid grid-cols-1 gap-2">
                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="jumlah_jenis_kemasan" class="block text-sm font-medium text-gray-700 mb-4">Jumlah Jenis Kemasan</label>
                                                                    <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="number" name="jumlah_jenis_kemasan" @isset($items->jumlah_jenis_kemasan) value="{{ $items->jumlah_jenis_kemasan }}" @endisset id="jumlah_jenis_kemasan" placeholder="Jumlah Jenis Kemasan" />
                                                                </div>

                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="jumlah_peti_kemas" class="block text-sm font-medium text-gray-700 mb-4">Jumlah Peti Kemas</label>
                                                                    <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="number" name="jumlah_peti_kemas"  @isset($items->jumlah_peti_kemas) value="{{ $items->jumlah_peti_kemas }}" @endisset id="jumlah_peti_kemas" placeholder="Jumlah Peti Kemas" />
                                                                </div>

                                                                <div class="px-6 pt-6  text-grey-darker text-justify flex flex-col">
                                                                    <label for="jumlah_jenis_barang" class="block text-sm font-medium text-gray-700 mb-4">Jumlah Jenis Barang</label>
                                                                    <input class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" type="number" name="jumlah_jenis_barang" @isset($items->jumlah_jenis_barang) value="{{ $items->jumlah_jenis_barang }}" @endisset id="jumlah_jenis_barang" placeholder="Jumlah Jenis Barang" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="wrap">
                                                            
                                                        </div>

                                                        <div class="wrap">
                                                            <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                                                <p>Data Peti Kemas dan Pengemas<p>
                                                                <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                                            </div>

                                                            <div class="grid grid-cols-1 gap-2">
                                                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                                                    <label for="tempat_penimbunan" class="block text-sm font-medium text-gray-700 mb-4">Tempat Penimbunan</label>
                                                                    <x-input.select name="tempat_penimbunan" id="tempat_penimbunan">
                                                                        @isset($items->tempat_penimbunan)
                                                                            <option value="{{ $items->tempat_penimbunan }}" selected>{{ $items->tempat_penimbunan }}</option>
                                                                        @else
                                                                            <option value="" selected>Belum Memilih</option>
                                                                        @endisset
                                                                        <option value="BT01 - Batu Ampar">BT01 - Batu Ampar</option>
                                                                        <option value="BT05 - Hang Nadim">BT05 - Hang Nadim</option>
                                                                        <option value="BT07 - Kabil PTK">BT07 - Kabil PTK</option>
                                                                        <option value="BT08 - Punggur">BT08 - Punggur</option>
                                                                        <option value="BT09 - Sekupang">BT09 - Sekupang</option>
                                                                        <option value="BT10 - Sewu">BT10 - Sewu</option>
                                                                        <option value="BT11 - Teluk Senimba">BT11 - Teluk Senimba</option>
                                                                        <option value="BT12 - Sagulung/Tanjung Uncang">BT12 - Sagulung/Tanjung Uncang</option>
                                                                        <option value="BT13 - Birotika Semesta">BT13 - Birotika Semesta</option>
                                                                        <option value="BT15 - Bintang 99 Persada">BT15 - Bintang 99 Persada</option>
                                                                        <option value="BT18 - Persero Kargo">BT18 - Persero Kargo</option>
                                                                        <option value="BT19 - DBM">BT19 - DBM</option>
                                                                        <option value="BT20 - Indo Berjaya Logistik">BT20 - Indo Berjaya Logistik</option>
                                                                        <option value="BT21 - Pukadara Pranaperkasa">BT21 - Pukadara Pranaperkasa</option>
                                                                        <option value="BT22 - Inti Barokah Utama">BT22 - Inti Barokah Utama</option>
                                                                        <option value="BT23 - Duta Niaga Logistik">BT23 - Duta Niaga Logistik</option>
                                                                        <option value="BT24 - PT. Andalan Express Indonesia">BT24 - PT. Andalan Express Indonesia</option>
                                                                        <option value="BT25 - Angkasa Pura Logistik">BT25 - Angkasa Pura Logistik</option>
                                                                        <option value="BT7B - Semblog">BT7B - Semblog</option>
                                                                    </x-input.select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                
                                                <div class="col-span-3 mt-5 text-right">
                                                    <button class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Save</button>
                                                </div>

                                
                        </form>
                    </p>
                </div>
            </div>
    </div>
</div>
                </div>
            </main>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        
        $('.bendera').select2();

        $('.pelabuhan_muat').select2();
        
        $('.pelabuhan_tujuan').select2();
        
        $('.pelabuhan_transit').select2();
    });
</script>
    <script src="https://unpkg.com/moment"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script src="https://unpkg.com/trix@1.2.3/dist/trix.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
</body>
</html>