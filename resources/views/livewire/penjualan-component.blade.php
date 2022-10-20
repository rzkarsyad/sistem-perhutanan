<div>
    @include('livewire.penjualan-modal')

    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif

    <div class="d-flex justify-content-between">
        <h4 class="fw-bold py-3 mb-4">Penjualan</h4>
        <div class="mt-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#penjualanModal">
                Tambah Penjualan
            </button>
        </div>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Produksi MKP Periode Lalu</th>
                <th>Produksi MKP Periode Sekarang</th>
                <th>Total Produksi MKP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $item)
            <tr>
                <td>{{ $item->produksi_mkp_old }}</td>
                <td>{{ $item->produksi_mkp_now }}</td>
                <td>{{ $item->produksi_mkp_total }}</td>
                <td>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#updatePenjualanModal"
                        wire:click="editPenjualan({{$item->id}})" class="btn btn-sm btn-warning">
                        Sunting
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#deletePenjualanModal"
                        wire:click="deletePenjualan({{$item->id}})" class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>