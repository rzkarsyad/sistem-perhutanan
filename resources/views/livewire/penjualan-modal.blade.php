<!-- Create Pengolah Modal -->
<div wire:ignore.self class="modal fade" id="penjualanModal" tabindex="-1" aria-labelledby="penjualanModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="penjualanModalLabel">Tambah Data Penjualan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="savePenjualan">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="produksi_mkp_old" class="form-label">Produksi MKP Periode Lalu</label>
                        <div class="input-group mb-1">
                            <input type="text" wire:model="produksi_mkp_old" class="form-control">
                            <span class="input-group-text" id="basic-addon2">Kg</span>
                        </div>
                        @error('produksi_mkp_old')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="produksi_mkp_now" class="form-label">Produksi MKP Periode Sekarang</label>
                        <div class="input-group mb-1">
                            <input type="text" wire:model="produksi_mkp_now" class="form-control">
                            <span class="input-group-text" id="basic-addon2">Kg</span>
                        </div>
                        @error('produksi_mkp_now')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="produksi_mkp_total" class="form-label">Total Produksi MKP</label>
                        <div class="input-group mb-1">
                            <input type="text" wire:model="produksi_mkp_total" class="form-control">
                            <span class="input-group-text" id="basic-addon2">Kg</span>
                        </div>
                        @error('produksi_mkp_total')
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

<!-- Update Pengolah Modal -->
<div wire:ignore.self class="modal fade" id="updatePenjualanModal" tabindex="-1"
    aria-labelledby="updatePenjualanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatePenjualanModalLabel">Ubah Data Penjualan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="updatePenjualan">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="produksi_mkp_old" class="form-label">Produksi MKP Periode Lalu</label>
                        <input type="text" wire:model="produksi_mkp_old" class="form-control">
                        @error('produksi_mkp_old')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="produksi_mkp_now" class="form-label">Produksi MKP Periode Sekarang</label>
                        <input type="text" wire:model="produksi_mkp_now" class="form-control">
                        @error('produksi_mkp_now')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="produksi_mkp_total" class="form-label">Total Produksi MKP</label>
                        <input type="text" wire:model="produksi_mkp_total" class="form-control">
                        @error('produksi_mkp_total')
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

<!-- Delete Pengolah Modal -->
<div wire:ignore.self class="modal fade" id="deletePenjualanModal" tabindex="-1"
    aria-labelledby="deletePenjualanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatePenjualanModalLabel">Hapus Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyPenjualan">
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