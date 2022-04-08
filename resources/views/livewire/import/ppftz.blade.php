<div>
    <x-button.secondary wire:click="$toggle('showModal')" class="flex items-center space-x-2"><x-icon.upload class="text-cool-gray-500"/> <span>Import</span></x-button.secondary>

    <form wire:submit.prevent="import">
        <x-modal.dialog wire:model="showModal">
            <x-slot name="title">Import Dokumen Pabean</x-slot>

            <x-slot name="content">
                @unless ($upload)
                <div class="py-12 flex flex-col items-center justify-center ">
                    <div class="flex items-center space-x-2 text-xl">
                        <x-icon.upload class="text-cool-gray-400 h-8 w-8" />
                        <x-input.file-upload wire:model="upload" id="upload"><span class="text-cool-gray-500 font-bold">CSV File</span></x-input.file-upload>
                    </div>
                    @error('upload') <div class="mt-3 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
                @else
        
                <div>
                    <x-input.group for="users_id" label="User ID" :error="$errors->first('fieldColumnMap.users_id')">
                        <x-input.select wire:model="fieldColumnMap.users_id" id="users_id">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nomor_aju_pabean" label="Nomor Aju Pabean" :error="$errors->first('fieldColumnMap.nomor_aju_pabean')">
                        <x-input.select wire:model="fieldColumnMap.nomor_aju_pabean" id="nomor_aju_pabean">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="kategori_pemberitahuan" label="Kategori Pemberitahuan" :error="$errors->first('fieldColumnMap.kategori_pemberitahuan')">
                        <x-input.select wire:model="fieldColumnMap.kategori_pemberitahuan" id="kategori_pemberitahuan">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="pengajuan_sebagai" label="Pengajuan Sebagai" :error="$errors->first('fieldColumnMap.kantor_aju_pabean')">
                        <x-input.select wire:model="fieldColumnMap.pengajuan_sebagai" id="pengajuan_sebagai">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="jenis_pemberitahuan" label="Jenis Pemberitahuan" :error="$errors->first('fieldColumnMap.jenis_pemberitahuan')">
                        <x-input.select wire:model="fieldColumnMap.jenis_pemberitahuan" id="jenis_pemberitahuan">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="jenis_pemberitahuan_lanjut" label="Jenis Pemberitahuan Lanjut" :error="$errors->first('fieldColumnMap.jenis_pemberitahuan_lanjut')">
                        <x-input.select wire:model="fieldColumnMap.jenis_pemberitahuan_lanjut" id="jenis_pemberitahuan_lanjut">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="kantor_aju_pabean" label="Kantor Aju Pabean" :error="$errors->first('fieldColumnMap.kantor_aju_pabean')">
                        <x-input.select wire:model="fieldColumnMap.kantor_aju_pabean" id="kantor_aju_pabean">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="kategori_pemasukan" label="Kategori Pemasukan" :error="$errors->first('fieldColumnMap.kategori_pemasukan')">
                        <x-input.select wire:model="fieldColumnMap.kategori_pemasukan" id="kategori_pemasukan">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="tujuan_pemasukan" label="Tujuan Pemasukan" :error="$errors->first('fieldColumnMap.tujuan_pemasukan')">
                        <x-input.select wire:model="fieldColumnMap.tujuan_pemasukan" id="kategori_pemasukan">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="asal_barang" label="Asal Barang" :error="$errors->first('fieldColumnMap.asal_barang')">
                        <x-input.select wire:model="fieldColumnMap.asal_barang" id="asal_barang">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="jenis_faktur" label="Jenis Faktur" :error="$errors->first('fieldColumnMap.jenis_faktur')">
                        <x-input.select wire:model="fieldColumnMap.jenis_faktur" id="jenis_faktur">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="jenis_identitas_pengirim" label="Jenis Identitas Pengirim" :error="$errors->first('fieldColumnMap.jenis_identitas_pengirim')">
                        <x-input.select wire:model="fieldColumnMap.jenis_identitas_pengirim" id="jenis_identitas_pengirim">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nomor_identitas_pengirim" label="Nomor Identitas Pengirim" :error="$errors->first('fieldColumnMap.nomor_identitas_pengirim')">
                        <x-input.select wire:model="fieldColumnMap.nomor_identitas_pengirim" id="nomor_identitas_pengirim">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nama_pengirim" label="Nama Pengirim" :error="$errors->first('fieldColumnMap.nama_pengirim')">
                        <x-input.select wire:model="fieldColumnMap.nama_pengirim" id="nama_pengirim">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="alamat_pengirim" label="Alamat Pengirim" :error="$errors->first('fieldColumnMap.alamat_pengirim')">
                        <x-input.select wire:model="fieldColumnMap.alamat_pengirim" id="alamat_pengirim">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="jenis_identitas_penerima" label="Jenis Identitas Penerima" :error="$errors->first('fieldColumnMap.jenis_identitas_penerima')">
                        <x-input.select wire:model="fieldColumnMap.jenis_identitas_penerima" id="jenis_identitas_penerima">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nomor_identitas_penerima" label="Nomor Identitas Penerima" :error="$errors->first('fieldColumnMap.nomor_identitas_penerima')">
                        <x-input.select wire:model="fieldColumnMap.nomor_identitas_penerima" id="nomor_identitas_penerima">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nama_penerima" label="Nama Penerima" :error="$errors->first('fieldColumnMap.nama_penerima')">
                        <x-input.select wire:model="fieldColumnMap.nama_penerima" id="nama_penerima">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="alamat_penerima" label="Alamat Penerima" :error="$errors->first('fieldColumnMap.alamat_penerima')">
                        <x-input.select wire:model="fieldColumnMap.alamat_penerima" id="alamat_penerima">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nomor_ijin_bpk_penerima" label="Nomor Izin BPK Penerima" :error="$errors->first('fieldColumnMap.nomor_ijin_bpk_penerima')">
                        <x-input.select wire:model="fieldColumnMap.nomor_ijin_bpk_penerima" id="nomor_ijin_bpk_penerima">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="npwp_ppjk" label="Nomor NPWP PPJK" :error="$errors->first('fieldColumnMap.npwp_ppjk')">
                        <x-input.select wire:model="fieldColumnMap.npwp_ppjk" id="npwp_ppjk">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nama_ppjk" label="Nama PPJK" :error="$errors->first('fieldColumnMap.nama_ppjk')">
                        <x-input.select wire:model="fieldColumnMap.nama_ppjk" id="nama_ppjk">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="alamat_ppjk" label="Alamat PPJK" :error="$errors->first('fieldColumnMap.alamat_ppjk')">
                        <x-input.select wire:model="fieldColumnMap.alamat_ppjk" id="alamat_ppjk">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nilai_barang" label="Nilai Barang" :error="$errors->first('fieldColumnMap.nilai_barang')">
                        <x-input.select wire:model="fieldColumnMap.nilai_barang" id="nilai_barang">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nilai_bc11" label="Nilai BC 11" :error="$errors->first('fieldColumnMap.nilai_bc11')">
                        <x-input.select wire:model="fieldColumnMap.nilai_bc11" id="nilai_bc11">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="tanggal_bc11" label="Tanggal BC 11" :error="$errors->first('fieldColumnMap.tanggal_bc11')">
                        <x-input.select wire:model="fieldColumnMap.tanggal_bc11" id="tanggal_bc11">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="pos_bc11" label="Pos BC 11" :error="$errors->first('fieldColumnMap.pos_bc11')">
                        <x-input.select wire:model="fieldColumnMap.pos_bc11" id="pos_bc11">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="pos_bc11" label="Pos BC 11" :error="$errors->first('fieldColumnMap.pos_bc11')">
                        <x-input.select wire:model="fieldColumnMap.pos_bc11" id="pos_bc11">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="subpos_bc11" label="Subpos BC 11" :error="$errors->first('fieldColumnMap.subpos_bc11')">
                        <x-input.select wire:model="fieldColumnMap.subpos_bc11" id="subpos_bc11">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="subsubpos_bc11" label="Subsubpos BC 11" :error="$errors->first('fieldColumnMap.subsubpos_bc11')">
                        <x-input.select wire:model="fieldColumnMap.subsubpos_bc11" id="subsubpos_bc11">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="cara_angkut" label="Cara Angkut" :error="$errors->first('fieldColumnMap.cara_angkut')">
                        <x-input.select wire:model="fieldColumnMap.cara_angkut" id="cara_angkut">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nama_angkut" label="Nama Angkut" :error="$errors->first('fieldColumnMap.nama_angkut')">
                        <x-input.select wire:model="fieldColumnMap.nama_angkut" id="nama_angkut">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="bendera" label="Bendera" :error="$errors->first('fieldColumnMap.bendera')">
                        <x-input.select wire:model="fieldColumnMap.bendera" id="bendera">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nomor_voy_flight_pol" label="Nomor Voy Flight" :error="$errors->first('fieldColumnMap.nomor_voy_flight_pol')">
                        <x-input.select wire:model="fieldColumnMap.nomor_voy_flight_pol" id="nomor_voy_flight_pol">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="pelabuhan_muat" label="Pelabuhan Muat" :error="$errors->first('fieldColumnMap.pelabuhan_muat')">
                        <x-input.select wire:model="fieldColumnMap.pelabuhan_muat" id="pelabuhan_muat">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="pelabuhan_tujuan" label="Pelabuhan Tujuan" :error="$errors->first('fieldColumnMap.pelabuhan_tujuan')">
                        <x-input.select wire:model="fieldColumnMap.pelabuhan_tujuan" id="pelabuhan_tujuan">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="pelabuhan_transit" label="Pelabuhan Transit" :error="$errors->first('fieldColumnMap.pelabuhan_transit')">
                        <x-input.select wire:model="fieldColumnMap.pelabuhan_transit" id="pelabuhan_transit">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="berat_bersih" label="Berat Bersih" :error="$errors->first('fieldColumnMap.berat_bersih')">
                        <x-input.select wire:model="fieldColumnMap.berat_bersih" id="berat_bersih">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="berat_kotor" label="Berat Kotor" :error="$errors->first('fieldColumnMap.berat_kotor')">
                        <x-input.select wire:model="fieldColumnMap.berat_kotor" id="berat_bersih">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="volume" label="Volume" :error="$errors->first('fieldColumnMap.volume')">
                        <x-input.select wire:model="fieldColumnMap.volume" id="volume">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="perkiraan_tanggal_pemasukan" label="Perkiraan Tanggal Pemasukan" :error="$errors->first('fieldColumnMap.perkiraan_tanggal_pemasukan')">
                        <x-input.select wire:model="fieldColumnMap.perkiraan_tanggal_pemasukan" id="perkiraan_tanggal_pemasukan">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>
                    
                    <x-input.group for="jumlah_jenis_kemasan" label="Jumlah Jenis Kemasan" :error="$errors->first('fieldColumnMap.jumlah_jenis_kemasan')">
                        <x-input.select wire:model="fieldColumnMap.jumlah_jenis_kemasan" id="jumlah_jenis_kemasan">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="jumlah_peti_kemas" label="Jumlah Peti Kemas" :error="$errors->first('fieldColumnMap.jumlah_peti_kemas')">
                        <x-input.select wire:model="fieldColumnMap.jumlah_peti_kemas" id="jumlah_peti_kemas">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="jumlah_jenis_barang" label="Jumlah Jenis Barang" :error="$errors->first('fieldColumnMap.jumlah_jenis_barang')">
                        <x-input.select wire:model="fieldColumnMap.jumlah_jenis_barang" id="jumlah_jenis_barang">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="tempat_penimbunan" label="Tempat Penimbunan" :error="$errors->first('fieldColumnMap.tempat_penimbunan')">
                        <x-input.select wire:model="fieldColumnMap.tempat_penimbunan" id="tempat_penimbunan">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="status" label="Status" :error="$errors->first('fieldColumnMap.status')">
                        <x-input.select wire:model="fieldColumnMap.status" id="status">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>
                </div>
                @endif
            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showModal', false)">Cancel</x-button.secondary>

                <x-button.primary type="submit">Import</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
