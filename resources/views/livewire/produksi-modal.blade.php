<!-- Create Produksi Modal -->
<div wire:ignore.self class="modal fade" id="produksiModal" tabindex="-1" aria-labelledby="produksiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="produksiModalLabel">Tambah Data Produksi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveProduksi">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="rph" class="form-label">RPH</label>
                        <input type="text" wire:model="rph" class="form-control">
                        @error('rph')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_petak" class="form-label">Nama Petak</label>
                        <input type="text" wire:model="nama_petak" class="form-control">
                        @error('nama_petak')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_petani" class="form-label">Nama Petani</label>
                        <input type="text" wire:model="nama_petani" class="form-control">
                        @error('nama_petani')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="bulan" class="form-label">Bulan</label>
                                <div>
                                    <select wire:model="bulan" id="bulan" class="form-control">
                                        <option value=''>Pilih Bulan</option>
                                        <option value='Januari'>Januari</option>
                                        <option value='Februari'>Februari</option>
                                        <option value='Maret'>Maret</option>
                                        <option value='April'>April</option>
                                        <option value='Mei'>Mei</option>
                                        <option value='Juni'>Juni</option>
                                        <option value='Juli'>Juli</option>
                                        <option value='Agustus'>Agustus</option>
                                        <option value='September'>September</option>
                                        <option value='Oktober'>Oktober</option>
                                        <option value='November'>November</option>
                                        <option value='Desember'>Desember</option>
                                    </select>
                                    @error('bulan')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <input type="text" wire:model="tahun" class="form-control">
                                @error('tahun')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="produksi_dkp" class="form-label">Produksi DKP</label>
                        <div class="input-group mb-1">
                            <input type="text" wire:model="produksi_dkp" class="form-control">
                            <span class="input-group-text" id="basic-addon2">Kg</span>
                        </div>
                        @error('produksi_dkp')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Produksi Modal -->
<div wire:ignore.self class="modal fade" id="updateProduksiModal" tabindex="-1"
    aria-labelledby="updateProduksiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateProduksiModalLabel">Ubah Data Produksi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="updateProduksi">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="rph" class="form-label">RPH</label>
                        <input type="text" wire:model="rph" class="form-control">
                        @error('rph')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_petak" class="form-label">Nama Petak</label>
                        <input type="text" wire:model="nama_petak" class="form-control">
                        @error('nama_petak')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_petani" class="form-label">Nama Petani</label>
                        <input type="text" wire:model="nama_petani" class="form-control">
                        @error('nama_petani')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="bulan" class="form-label">Bulan</label>
                                <div>
                                    <select wire:model="bulan" id="updateBulan" class="form-control">
                                        <option value=''>Pilih Bulan</option>
                                        <option value='Januari'>Januari</option>
                                        <option value='Februari'>Februari</option>
                                        <option value='Maret'>Maret</option>
                                        <option value='April'>April</option>
                                        <option value='Mei'>Mei</option>
                                        <option value='Juni'>Juni</option>
                                        <option value='Juli'>Juli</option>
                                        <option value='Agustus'>Agustus</option>
                                        <option value='September'>September</option>
                                        <option value='Oktober'>Oktober</option>
                                        <option value='November'>November</option>
                                        <option value='Desember'>Desember</option>
                                    </select>
                                    @error('bulan')
                                    <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <input type="text" wire:model="tahun" class="form-control">
                                @error('tahun')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="produksi_dkp" class="form-label">Produksi DKP</label>
                        <div class="input-group mb-1">
                            <input type="text" wire:model="produksi_dkp" class="form-control">
                            <span class="input-group-text" id="basic-addon2">Kg</span>
                        </div>
                        @error('produksi_dkp')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Produksi Modal -->
<div wire:ignore.self class="modal fade" id="deleteProduksiModal" tabindex="-1"
    aria-labelledby="deleteProduksiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateProduksiModalLabel">Hapus Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyProduksi">
                <div class="modal-body">
                    <h6>Apakah kamu yakin ingin menghapus data dengan ini?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ya, hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>