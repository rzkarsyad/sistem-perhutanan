<!-- Create Petak Modal -->
<div wire:ignore.self class="modal fade" id="petakModal" tabindex="-1" aria-labelledby="petakModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="petakModalLabel">Tambah Data Petak</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="savePetak">
                <div class="modal-body">
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
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="tahun_tanam" class="form-label">Tahun Tanam</label>
                                <input type="year" wire:model="tahun_tanam" class="form-control">
                                @error('tahun_tanam')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="luas_lahan" class="form-label">Luas Lahan (Ha)</label>
                                <input type="text" wire:model="luas_lahan" class="form-control">
                                @error('luas_lahan')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="jenis_bibit" class="form-label">Jenis Bibit</label>
                                <input type="text" wire:model="jenis_bibit" class="form-control">
                                @error('jenis_bibit')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="jml_pohon" class="form-label">Jumlah Pohon</label>
                                <input type="text" wire:model="jml_pohon" class="form-control">
                                @error('jml_pohon')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
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

<!-- Update Petak Modal -->
<div wire:ignore.self class="modal fade" id="updatePetakModal" tabindex="-1" aria-labelledby="updatePetakModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatePetakModalLabel">Ubah Data Petak</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="updatePetak">
                <div class="modal-body">
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
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="tahun_tanam" class="form-label">Tahun Tanam</label>
                                <input type="text" wire:model="tahun_tanam" class="form-control">
                                @error('tahun_tanam')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="luas_lahan" class="form-label">Luas Lahan (Ha)</label>
                                <input type="text" wire:model="luas_lahan" class="form-control">
                                @error('luas_lahan')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="jenis_bibit" class="form-label">Jenis Bibit</label>
                                <input type="text" wire:model="jenis_bibit" class="form-control">
                                @error('jenis_bibit')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="jml_pohon" class="form-label">Jumlah Pohon</label>
                                <input type="text" wire:model="jml_pohon" class="form-control">
                                @error('jml_pohon')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
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

<!-- Delete Petak Modal -->
<div wire:ignore.self class="modal fade" id="deletePetakModal" tabindex="-1" aria-labelledby="deletePetakModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatePetakModalLabel">Hapus Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyPetak">
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