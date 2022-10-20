<!-- Create Realisasi Modal -->
<div wire:ignore.self class="modal fade" id="realisasiModal" tabindex="-1" aria-labelledby="realisasiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="realisasiModalLabel">Tambah Data Realisasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveRealisasi">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_pabrik" class="form-label">Nama Pabrik</label>
                        <input type="text" wire:model="nama_pabrik" class="form-control">
                        @error('nama_pabrik')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lokasi_pabrik" class="form-label">Lokasi Pabrik</label>
                        <input type="text" wire:model="lokasi_pabrik" class="form-control">
                        @error('lokasi_pabrik')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rph" class="form-label">RPH</label>
                        <input type="text" wire:model="rph" class="form-control">
                        @error('rph')
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
                        <label for="produksi_dkp" class="form-label">Produksi DKP</label>
                        <div class="input-group mb-1">
                            <input type="text" wire:model="produksi_dkp" class="form-control">
                            <span class="input-group-text" id="basic-addon2">Kg</span>
                        </div>
                        @error('produksi_dkp')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_pengolah" class="form-label">Nama Pengolah</label>
                        <input type="text" wire:model="nama_pengolah" class="form-control">
                        @error('nama_pengolah')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="produksi_mkp" class="form-label">Produksi MKP</label>
                        <div class="input-group mb-1">
                            <input type="text" wire:model="produksi_mkp" class="form-control">
                            <span class="input-group-text" id="basic-addon2">Kg</span>
                        </div>
                        @error('produksi_mkp')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rendemen" class="form-label">Rendemen</label>
                        <input type="text" wire:model="rendemen" class="form-control">
                        @error('rendemen')
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

<!-- Update Realisasi Modal -->
<div wire:ignore.self class="modal fade" id="updateRealisasiModal" tabindex="-1"
    aria-labelledby="updateRealisasiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateRealisasiModalLabel">Ubah Data Petak</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="updateRealisasi">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_pabrik" class="form-label">Nama Pabrik</label>
                        <input type="text" wire:model="nama_pabrik" class="form-control">
                        @error('nama_pabrik')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lokasi_pabrik" class="form-label">Lokasi Pabrik</label>
                        <input type="text" wire:model="lokasi_pabrik" class="form-control">
                        @error('lokasi_pabrik')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rph" class="form-label">RPH</label>
                        <input type="text" wire:model="rph" class="form-control">
                        @error('rph')
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
                        <label for="produksi_dkp" class="form-label">Produksi DKP</label>
                        <input type="text" wire:model="produksi_dkp" class="form-control">
                        @error('produksi_dkp')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_pengolah" class="form-label">Nama Pengolah</label>
                        <input type="text" wire:model="nama_pengolah" class="form-control">
                        @error('nama_pengolah')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="produksi_mkp" class="form-label">Produksi MKP</label>
                        <input type="text" wire:model="produksi_mkp" class="form-control">
                        @error('produksi_mkp')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rendemen" class="form-label">Rendemen</label>
                        <input type="text" wire:model="rendemen" class="form-control">
                        @error('rendemen')
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

<!-- Delete Realisasi Modal -->
<div wire:ignore.self class="modal fade" id="deleteRealisasiModal" tabindex="-1"
    aria-labelledby="deleteRealisasiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatePetakModalLabel">Hapus Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyRealisasi">
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