<div>
    @include('livewire.petak-modal')

    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif

    <div class="d-flex justify-content-between">
        <h4 class="fw-bold py-3 mb-4">Petak</h4>
        <div class="mt-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#petakModal">
                Tambah Petak
            </button>
        </div>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>RPH</th>
                <th>Nama Petak</th>
                <th>Tahun Tanam</th>
                <th>Luas Lahan (Ha)</th>
                <th>Jenis Bibit</th>
                <th>Jumlah Pohon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petak as $item)
            <tr>
                <td>{{ $item->rph }}</td>
                <td>{{ $item->nama_petak }}</td>
                <td>{{ $item->tahun_tanam }}</td>
                <td>{{ $item->luas_lahan }}</td>
                <td>{{ $item->jenis_bibit }}</td>
                <td>{{ $item->jml_pohon }}</td>
                <td>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#updatePetakModal"
                        wire:click="editPetak({{$item->id}})" class="btn btn-sm btn-warning">
                        Sunting
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#deletePetakModal"
                        wire:click="deletePetak({{$item->id}})" class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>