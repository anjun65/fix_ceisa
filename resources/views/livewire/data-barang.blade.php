<div>
    <h1 class="text-2xl font-semibold text-gray-900">Daftar Dokumen</h1></h1>
    
    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px">
            <li class="mr-2">
                <a href="{{ route('edit-pabean', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Header</a>
            </li>
            <li class="mr-2">
                <a href="{{ route('edit-dokumen', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" >Data Dokumen</a>
            </li>
            <li class="mr-2">
                <a href="{{ route('edit-peti', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" aria-current="page">Data Peti Kemas</a>
            </li>
            <li class="mr-2">
                <a href="{{ route('edit-kemasan', $nomor_aju_pabean )}}" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Data Kemasan</a>
            </li>
            <li class="mr-2">
                <a href="{{ route('edit-barang', $nomor_aju_pabean )}}" class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500">Data Barang</a>
            </li>
        </ul>
    </div>
    
    <div class="p-4 bg-white rounded shadow hover:shadow-md duration-4">
        <h1 class="text-lg font-semibold text-gray-900">Data Barang</h1>

    <div class="py-4 space-y-4">
        <!-- Top Bar -->
        <div class="flex justify-between">
            <div class="w-2/4 flex space-x-4">
                <x-input.text wire:model="filters.seri" placeholder="Cari Dokumen..." />
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

                    <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                        <x-icon.trash class="text-cool-gray-400"/> <span>Hapus</span>
                    </x-dropdown.item>
                </x-dropdown>

                <x-button.primary wire:click="create"><x-icon.plus/> Baru</x-button.primary>
            </div>
        </div>


        <!-- Transactions Table -->
        <div class="flex-col space-y-4">
            <x-table>
                <x-slot name="head">
                    <x-table.heading class="pr-0 w-8">
                        <x-input.checkbox wire:model="selectPage" />
                    </x-table.heading>

                    <x-table.heading sortable multi-column wire:click="sortBy('pos_tarif')" :direction="$sorts['pos_tarif'] ?? null">Pos Tarif</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('uraian_barang')" :direction="$sorts['uraian_barang'] ?? null">Uraian Barang</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('merek')" :direction="$sorts['merek'] ?? null">Merek</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('jumlah_satuan')" :direction="$sorts['jumlah_satuan'] ?? null">Jumlah Satuan</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('bruto')" :direction="$sorts['bruto'] ?? null">Bruto</x-table.heading>

                    <x-table.heading />
                </x-slot>

                <x-slot name="body">
                    @if ($selectPage)
                    <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                        <x-table.cell colspan="8">
                            @unless ($selectAll)
                            <div>
                                <span>Anda telah memilih <strong>{{ $items->count() }}</strong> list Dokumen Lampiran, Apakah anda mau pilih semua data <strong>{{ $items->total() }}</strong>?</span>
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
                            <span class="text-cool-gray-900 font-medium">{{ $item->pos_tarif }} </span>
                        </x-table.cell>

                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $item->uraian_barang }} </span>
                        </x-table.cell>

                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $item->merek }} </span>
                        </x-table.cell>

                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $item->jumlah_satuan }} </span>
                        </x-table.cell>

                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $item->bruto }} </span>
                        </x-table.cell>

                        <x-table.cell>
                            <x-button.link wire:click="edit({{ $item->id }})">Edit</x-button.link>
                        </x-table.cell>
                    </x-table.row>
                    @empty
                    <x-table.row>
                        <x-table.cell colspan="8">
                            <div class="flex justify-center items-center space-x-2">
                                <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada list Peti Kemas yang ditemukan...</span>
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
    </div>

    <!-- Delete Transactions Modal -->
    <form wire:submit.prevent="deleteSelected">
        <x-modal.confirmation wire:model.defer="showDeleteModal">
            <x-slot name="title">Hapus List Barang</x-slot>

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
            <x-slot name="title">List Barang</x-slot>

            <x-slot name="content">

                <x-input.group for="pos_tarif" label="Pos Tarif" :error="$errors->first('')">
                    <x-input.text wire:model="editing.pos_tarif" id="pos_tarif" placeholder="Pos Tarif" />
                </x-input.group>

                <x-input.group for="uraian_barang" label="Urain Barang" :error="$errors->first('')">
                    <x-input.text wire:model="editing.uraian_barang" id="uraian_barang" placeholder="Uraian Barang" />
                </x-input.group>

                <x-input.group for="merek" label="Merek" :error="$errors->first('')">
                    <x-input.text wire:model="editing.merek" id="merek" placeholder="Merek" />
                </x-input.group>

                {{-- <x-input.group for="jumlah_satuan" label="Jumlah Satuan Dokumen" :error="$errors->first('')">

                    <x-input.select wire:model="editing.jumlah_satuan" id="jenis_dokumen-status">
                        <option value="">Pilih jumlah satuan...</option>
                        <option value="05 - lift">05 - lift</option>
                        <option value="06 - small spray">06 - small spray</option>
                        <option value="08 - heat lot">08 - heat lot</option>
                        <option value="10 - group">10 - group</option>
                        <option value="11 - outfit">11 - outfit</option>
                        <option value="13 - lifrationt">13 - ration</option>
                    </x-input.select>
                </x-input.group> --}}

                <x-input.group for="jenis" label="Jenis item" :error="$errors->first('editing.jenis')">
                    <x-input.select wire:model="editing.Kemasan" id="jenis">
                            <option value="" disabled>Pilih Jenis Item...</option>

                            @foreach (App\Models\ConfigJenisSatuan::all() as $jenis_dokumen)
                            <option value="{{ $jenis_dokumen->code }} - {{ $jenis_dokumen->name }}">{{ $jenis_dokumen->code }} - {{ $jenis_dokumen->name }}</option>
                            @endforeach
                    </x-input.select>
                </x-input.group>

                <x-input.group for="bruto" label="Bruto" :error="$errors->first('')">
                    <x-input.text wire:model="editing.bruto" id="bruto" placeholder="Bruto" />
                </x-input.group>

            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>

                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>



