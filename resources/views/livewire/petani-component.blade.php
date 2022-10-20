<div>

    @include('livewire.petani-modal')

    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif

    <div class="d-flex justify-content-between">
        <h4 class="fw-bold py-3 mb-4">Petani</h4>
        <div class="mt-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#petaniModal">
                Tambah Petani
            </button>
        </div>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Hp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petani as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#updatePetaniModal"
                        wire:click="editPetani({{$item->id}})" class="btn btn-sm btn-warning">
                        Sunting
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#deletePetaniModal"
                        wire:click="deletePetani({{$item->id}})" class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>