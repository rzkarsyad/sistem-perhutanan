<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="sample_form">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Tambah Produksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="form_result"></span>
                    <div class="mb-3">
                        <label for="rph" class="form-label">RPH</label>
                        <input type="text" class="form-control" name="rph" id="rph" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_petak" class="form-label">Nama Petak</label>
                        <input type="text" class="form-control" name="nama_petak" id="nama_petak" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_petani" class="form-label">Nama Petani</label>
                        <input type="text" class="form-control" name="nama_petani" id="nama_petani" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="nama_bulan" class="form-label">Bulan</label>
                                <div>
                                    <select name="nama_bulan" id='nama_bulan' class='form-control' required>
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
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <select name="tahun" class="form-control" id="dropdownYear" onchange="getProjectReportFunc()" required></select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="produksi_dkp" class="form-label">Produksi DKP</label>
                        <input type="text" class="form-control" name="produksi_dkp" id="produksi_dkp" required>
                    </div>
                    <input type="hidden" name="action" id="action" value="Tambah" />
                    <input type="hidden" name="hidden_id" id="hidden_id" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <form method="post" id="sample_form" class="form-horizontal">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="margin:0;">Are you sure you want to remove this data?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
            </div>
        </form>  
        </div>
        </div>
    </div>