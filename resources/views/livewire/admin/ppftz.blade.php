<div>
    <h1 class="text-2xl font-semibold text-gray-900">Daftar Dokumen</h1></h1>

    <div class="py-4 space-y-4">
        <!-- Top Bar -->
        <div class="flex justify-between">
            <div class="w-2/4 flex space-x-4">
                <x-input.text wire:model="filters.nomor_aju_pabean" placeholder="Cari Dokumen Pabean..." />

                <x-button.link wire:click="toggleShowFilters">@if ($showFilters) Sembunyikan @endif Pencarian Spesifik...</x-button.link>
            </div>

            <div class="space-x-2 flex items-center">
                <x-input.group borderless paddingless for="perPage" label="Halaman">
                    <x-input.select wire:model="perPage" id="perPage">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </x-input.select>
                </x-input.group>

                <x-dropdown label="Aksi">
                    <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                        <x-icon.download class="text-cool-gray-400"/> <span>Ekspor</span>
                    </x-dropdown.item>

                    <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                        <x-icon.trash class="text-cool-gray-400"/> <span>Hapus</span>
                    </x-dropdown.item>
                </x-dropdown>

                <livewire:import.ppftz />
            </div>
        </div>

        <!-- Advanced Search -->
        <div>
            @if ($showFilters)
            <div class="bg-cool-gray-200 p-4 rounded shadow-inner flex relative">
                <div class="w-1/2 pr-2 space-y-4">
                    <x-input.group inline for="filter-pengirim" label="Pengirim">
                        <x-input.text wire:model="filters.pengirim" id="filter-pengirim"/>
                    </x-input.group>

                    <x-input.group inline for="filter-penerima" label="Penerima">
                        <x-input.text wire:model="filters.penerima" id="filter-penerima"/>
                    </x-input.group>
                </div>

                <div class="w-1/2 pl-2 space-y-4">
                    

                    <x-input.group inline for="filter-status" label="Status">
                        <x-input.select wire:model="filters.status" id="filter-status">
                            <option value="" disabled>Pilih Status...</option>

                            @foreach (App\Models\ppftz::STATUSES as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-button.link wire:click="resetFilters" class="absolute right-0 bottom-0 p-4">Reset Filters</x-button.link>
                </div>
            </div>
            @endif
        </div>

        <!-- Transactions Table -->
        <div class="flex-col space-y-4">
            <x-table>
                <x-slot name="head">
                    <x-table.heading class="pr-0 w-8">
                        <x-input.checkbox wire:model="selectPage" />
                    </x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('jenis_pemberitahuan')" :direction="$sorts['jenis_pemberitahuan'] ?? null">Jenis PPFTZ</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('nomor_aju_pabean')" :direction="$sorts['nomor_aju_pabean'] ?? null">Nomor Aju</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('nama_pengirim')" :direction="$sorts['nama_pengirim'] ?? null">Pengirim</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('nama_penerima')" :direction="$sorts['nama_penerima'] ?? null">Penerima</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('status')" :direction="$sorts['status'] ?? null">Status</x-table.heading>
                    
                    <x-table.heading />
                </x-slot>

                <x-slot name="body">
                    @if ($selectPage)
                    <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                        <x-table.cell colspan="8">
                            @unless ($selectAll)
                            <div>
                                <span>Anda telah memilih <strong>{{ $items->count() }}</strong> Dokumen Pabean, Apakah anda mau pilih semua data <strong>{{ $items->total() }}</strong>?</span>
                                <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                            </div>
                            @else
                            <span>Anda telah memilih <strong>{{ $items->total() }}</strong> data.</span>
                            @endif
                        </x-table.cell>
                    </x-table.row>
                    @endif

                    @forelse ($items as $item)
                    <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $item->id }}">
                        <x-table.cell class="pr-0">
                            <x-input.checkbox wire:model="selected" value="{{ $item->id }}" />
                        </x-table.cell>

                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $item->jenis_pemberitahuan }} </span>
                        </x-table.cell>

                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $item->nomor_aju_pabean }} </span>
                        </x-table.cell>

                        <x-table.cell>
                            {{ $item->npwp_pengirim}}
                            {{ $item->nama_pengirim}}
                        </x-table.cell>

                        <x-table.cell>
                            {{ $item->npwp_penerima}}
                            {{ $item->nama_penerima}}
                        </x-table.cell>

                        <x-table.cell>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-{{ $item->status_color }}-100 text-{{ $item->status_color }}-800 capitalize">
                                {{ $item->status }}
                            </span>
                        </x-table.cell>

                        <x-table.cell>
                            <x-button.link wire:click="edit({{ $item->id }})">Edit</x-button.link>
                        </x-table.cell>

                        <x-table.cell>
                            <x-button.link wire:click="lihat({{ $item->id }})">Lihat</x-button.link>
                        </x-table.cell>
                    </x-table.row>
                    @empty
                    <x-table.row>
                        <x-table.cell colspan="8">
                            <div class="flex justify-center items-center space-x-2">
                                <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada Dokumen PPFTZ yang ditemukan...</span>
                            </div>
                        </x-table.cell>
                    </x-table.row>
                    @endforelse
                </x-slot>
            </x-table>

            <div>
                {{ $items->links() }}
            </div>
        </div>
    </div>

    <!-- Delete Transactions Modal -->
    <form wire:submit.prevent="deleteSelected">
        <x-modal.confirmation wire:model.defer="showDeleteModal">
            <x-slot name="title">Hapus Dokumen Pabean</x-slot>

            <x-slot name="content">
                <div class="py-8 text-cool-gray-700">Apakah anda yakin? Data yang telah dihapus tidak dapat dikembalikan.</div>
            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showDeleteModal', false)">Batal</x-button.secondary>

                <x-button.primary type="submit">Hapus</x-button.primary>
            </x-slot>
        </x-modal.confirmation>
    </form>

    <!-- Save Transaction Modal -->
    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Tambah Dokumen Pabean</x-slot>

            <x-slot name="content">

                <x-input.group for="pengajuan_sebagai" label="Pengajuan Sebagai ?" :error="$errors->first('editing.pengajuan_sebagai')">
                    <x-input.select disabled wire:model="editing.pengajuan_sebagai" id="pengajuan_sebagai">
                        <option value="" selected>Belum Memilih</option>
                        <option value="Pengusaha">Pengusaha</option>
                        <option value="PPJK">PPJK</option>
                    </x-input.select>
                </x-input.group>

                <x-input.group for="kantor_aju_pabean" label="Diajukan di Kantor:" :error="$errors->first('editing.kantor_aju_pabean')">
                    <x-input.select disabled wire:model="editing.kantor_aju_pabean" id="kantor_aju_pabean">
                        <option value="" selected>Belum Memilih</option>
                        <option value="DIREKTORAT IKC">DIREKTORAT IKC</option>
                        <option value="KPPBC TMP B TANJUNG BALAI KARIMUN">KPPBC TMP B TANJUNG BALAI KARIMUN</option>
                        <option value="KPU BEA DAN CUKAI TIPE B BATAM">KPU BEA DAN CUKAI TIPE B BATAM</option>
                        <option value="KPPBC TMP B TANJUNG PINANG">KPPBC TMP B TANJUNG PINANG</option>
                        <option value="KPPBC TMP C SABANG">KPPBC TMP C SABANG</option>
                    </x-input.select>
                </x-input.group>

                <x-input.group for="jenis_pemberitahuan" label="Jenis Pemberitahuan" :error="$errors->first('editing.jenis_pemberitahuan')">
                    <x-input.select disabled wire:model="editing.jenis_pemberitahuan" id="jenis_pemberitahuan">
                        <option value="" selected>Belum Memilih</option>
                        <option value="Pemasukan">Pemasukan</option>
                        <option value="Pengeluaran">Pengeluaran</option>
                    </x-input.select>
                </x-input.group>

                <x-input.group for="jenis_pemberitahuan_lanjut" label="Jenis Masuk" :error="$errors->first('editing.jenis_pemberitahuan_lanjut')">
                    <x-input.select disabled wire:model="editing.jenis_pemberitahuan_lanjut" id="jenis_pemberitahuan_lanjut">
                        <option value="" selected>Belum Memilih</option>
                        <option value="dari Luar Daerah Pabean">dari Luar Daerah Pabean</option>
                        <option value="dari FTZ lain">dari FTZ lain</option>
                        <option value="dari Tempat Penimbunan Berikat">dari Tempat Penimbunan Berikat</option>
                        <option value="dari Tempat Lain Dalam Daerah Pabean">dari Tempat Lain Dalam Daerah Pabean</option>
                    </x-input.select>
                </x-input.group>

                {{-- <x-input.group for="jenis_pemberitahuan" label="Jenis Pemberitahuan" :error="$errors->first('editing.jenis_pemberitahuan')">
                    <x-input.select wire:model="editing.jenis_pemberitahuan" id="jenis_pemberitahuan">
                        <option value="" selected>Belum Memilih</option>
                        <option value="ke Luar Daerah Pabean">ke Luar Daerah Pabean</option>
                        <option value="ke Tempat Dalam Daerah Pabean">dari FTZ lain</option>
                        <option value="ke FTZ lain">dari FTZ lain</option>
                        <option value="ke Tempat Penimbunanan Berikat">ke Tempat Penimbunanan Berikat</option>
                    </x-input.select>
                </x-input.group> --}}

            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>
                
                @isset($item)
                    <button type="button" wire:click="rejected({{ $item->id }})" class="bg-red-800 text-white py-2 px-4 border rounded-md text-sm leading-5 font-medium focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out border-gray-300 text-white active:bg-red-900 active:text-white hover:text-white">Reject</button>
                
                    <x-button.primary type="submit">Approve</x-button.primary>
                @endisset
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
