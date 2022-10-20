<!-- Create Pengolah Modal -->
<div wire:ignore.self class="modal fade" id="pengolahModal" tabindex="-1" aria-labelledby="pengolahModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="pengolahModalLabel">Tambah Data Pengolah</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="savePengolah">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" wire:model="nama" class="form-control">
                        @error('nama')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea wire:model="alamat" class="form-control"></textarea>
                        @error('alamat')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No. Hp</label>
                        <input type="text" wire:model="no_hp" class="form-control">
                        @error('no_hp')
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
<div wire:ignore.self class="modal fade" id="updatePengolahModal" tabindex="-1"
    aria-labelledby="updatePengolahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatePengolahModalLabel">Ubah Data Pengolah</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="updatePengolah">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" wire:model="nama" class="form-control">
                        @error('nama')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea wire:model="alamat" class="form-control"></textarea>
                        @error('alamat')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No. Hp</label>
                        <input type="text" wire:model="no_hp" class="form-control">
                        @error('no_hp')
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
<div wire:ignore.self class="modal fade" id="deletePengolahModal" tabindex="-1"
    aria-labelledby="deletePengolahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatePengolahModalLabel">Hapus Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyPengolah">
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