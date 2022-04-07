<div>
    <x-button.secondary wire:click="$toggle('showModal')" class="flex items-center space-x-2"><x-icon.upload class="text-cool-gray-500"/> <span>Import</span></x-button.secondary>

    <form wire:submit.prevent="import">
        <x-modal.dialog wire:model="showModal">
            <x-slot name="title">Import Izin Impor</x-slot>

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

                    <x-input.group for="perusahaan" label="Perusahaan" :error="$errors->first('fieldColumnMap.perusahaan')">
                        <x-input.select wire:model="fieldColumnMap.perusahaan" id="perusahaan">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="alamat_perusahaan" label="Alamat Perusahaan">
                        <x-input.select wire:model="fieldColumnMap.alamat_perusahaan" id="alamat_perusahaan">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="nomor_izin_bpk" label="Nomor Izin BPK">
                        <x-input.select wire:model="fieldColumnMap.nomor_izin_bpk" id="nomor_izin_bpk">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="tanggal_izin" label="Tanggal Izin">
                        <x-input.select wire:model="fieldColumnMap.tanggal_izin" id="tanggal_izin">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="awal_berlaku" label="Awal Berlaku">
                        <x-input.select wire:model="fieldColumnMap.awal_berlaku" id="awal_berlaku">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="akhir_berlaku" label="Akhir Berlaku">
                        <x-input.select wire:model="fieldColumnMap.akhir_berlaku" id="akhir_berlaku">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="npwp_perusahaan" label="NPWP Perusahaan">
                        <x-input.select wire:model="fieldColumnMap.npwp_perusahaan" id="npwp_perusahaan">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>


                    <x-input.group for="nomor_surat" label="Nomor Surat">
                        <x-input.select wire:model="fieldColumnMap.nomor_surat" id="nomor_surat">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>


                    <x-input.group for="tanggal_surat" label="Tanggal Surat">
                        <x-input.select wire:model="fieldColumnMap.tanggal_surat" id="tanggal_surat">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="kantor_bc_ftz" label="Kantor BC FTZ">
                        <x-input.select wire:model="fieldColumnMap.kantor_bc_ftz" id="kantor_bc_ftz">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group for="upload_dokumen" label="Upload Dokumen">
                        <x-input.select wire:model="fieldColumnMap.upload_dokumen" id="upload_dokumen">
                            <option value="" disabled>Select Column...</option>
                            @foreach ($columns as $column)
                                <option>{{ $column }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                     <x-input.group for="status" label="Status">
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
