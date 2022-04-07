<div>
    <h1 class="text-2xl font-semibold text-gray-900 pb-4">Home</h1>

    @forelse ($items as $item)
        <div class="my-4 pb-4 w-full bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">
                <div class="grid grid-cols-6 gap-4">
                <p class="col-start-1 col-end-6">
                    {{ $item->title }}
                </p>

                <p class="text-right align-items-end">
                    @if ($item->jenis == "UMUM")
                        <svg class="w-full h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    @else
                        <svg class="w-full h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    @endif
                
                </p>

                
                </div>
            </h5>
            <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400 text-justify">{{ $item->isi }}</p>
        </div>
        @empty
        <div class="my-4 pb-4 w-full bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">Tidak ada artikel yang ditemukan ....</h5>
        </div>
    @endforelse
</div>
