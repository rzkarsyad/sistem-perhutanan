<div>
    @include('livewire.realisasi-modal')

    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif

    <div class="d-flex justify-content-between">
        <h4 class="fw-bold py-3 mb-4">Realisasi</h4>
        <div class="mt-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#realisasiModal">
                Tambah Realisasi
            </button>
        </div>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama Pabrik</th>
                <th>Lokasi Pabrik</th>
                <th>RPH</th>
                <th>Nama Petak</th>
                <th>Produksi DKP</th>
                <th>Nama Pengolah</th>
                <th>Produksi MKP</th>
                <th>Rendemen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($realisasi as $item)
            <tr>
                <td>{{ $item->nama_pabrik }}</td>
                <td>{{ $item->lokasi_pabrik }}</td>
                <td>{{ $item->rph }}</td>
                <td>{{ $item->nama_petak }}</td>
                <td>{{ $item->produksi_dkp }}</td>
                <td>{{ $item->nama_pengolah }}</td>
                <td>{{ $item->produksi_mkp }}</td>
                <td>{{ $item->rendemen }}</td>
                <td>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateRealisasiModal"
                        wire:click="editRealisasi({{$item->id}})" class="btn btn-sm btn-warning">
                        Sunting
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#deleteRealisasiModal"
                        wire:click="deleteRealisasi({{$item->id}})" class="btn btn-sm btn-danger mt-2">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>