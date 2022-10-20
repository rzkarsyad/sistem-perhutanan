<div>

    @include('livewire.produksi-modal')

    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif

    <div class="d-flex justify-content-between">
        <h4 class="fw-bold py-3 mb-4">Produksi</h4>
        <div class="mt-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#produksiModal">
                Tambah Produksi
            </button>
        </div>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>RPH</th>
                <th>Nama Petak</th>
                <th>Nama Petani</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Produksi DKP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produksi as $item)
            <tr>
                <td>{{ $item->rph }}</td>
                <td>{{ $item->nama_petak }}</td>
                <td>{{ $item->nama_petani }}</td>
                <td>{{ $item->bulan }}</td>
                <td>{{ $item->tahun }}</td>
                <td>{{ $item->produksi_dkp }}</td>
                <td>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateProduksiModal"
                        wire:click="editProduksi({{$item->id}})" class="btn btn-sm btn-warning">
                        Sunting
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#deleteProduksiModal"
                        wire:click="deleteProduksi({{$item->id}})" class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>