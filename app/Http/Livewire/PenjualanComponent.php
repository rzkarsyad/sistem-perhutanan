<?php

namespace App\Http\Livewire;

use App\Models\Penjualan;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PenjualanComponent extends Component
{
    public $produksi_mkp_old, $produksi_mkp_now, $produksi_mkp_total;

    protected function rules()
    {
        return [
            'produksi_mkp_old' => 'required|integer',
            'produksi_mkp_now' => 'required|integer',
            'produksi_mkp_total' => 'required|integer',
        ];
    }

    protected $messages = [
        'produksi_mkp_old.required' => 'Kolom Produksi MKP Periode Lalu harus di isi.',
        'produksi_mkp_now.required' => 'Kolom Produksi MKP Periode Sekarang harus di isi.',
        'produksi_mkp_total.required' => 'Kolom Total Produksi MKP harus di isi.',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function savePenjualan()
    {
        $validatedData = $this->validate();

        Penjualan::create($validatedData);
        session()->flash('message', 'Data berhasil ditambahkan!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editPenjualan(int $penjualan_id)
    {
        $penjualan = Penjualan::find($penjualan_id);
        if ($penjualan) {
            $this->penjualan_id = $penjualan->id;
            $this->produksi_mkp_old = $penjualan->produksi_mkp_old;
            $this->produksi_mkp_now = $penjualan->produksi_mkp_now;
            $this->produksi_mkp_total = $penjualan->produksi_mkp_total;
        } else {
            return redirect()->to('/petani');
        }
    }

    public function updatePenjualan()
    {
        $validatedData = $this->validate();

        Penjualan::where('id', $this->penjualan_id)->update([
            'produksi_mkp_old' => $validatedData['produksi_mkp_old'],
            'produksi_mkp_now' => $validatedData['produksi_mkp_now'],
            'produksi_mkp_total' => $validatedData['produksi_mkp_total'],
        ]);
        session()->flash('message', 'Data berhasil diubah!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deletePenjualan(int $penjualan_id)
    {
        $this->penjualan_id = $penjualan_id;
    }

    public function destroyPenjualan()
    {
        Penjualan::find($this->penjualan_id)->delete();
        session()->flash('message', 'Data berhasil dihapus!');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->produksi_mkp_old = '';
        $this->produksi_mkp_now = '';
        $this->produksi_mkp_total = '';
    }

    public function render()
    {
        $user = Auth::user();
        $data = DB::table('users')
            ->join('role', 'role.id', '=', 'users.role_id')
            ->where('users.id', '=', $user->id)
            ->select('users.*', 'role.name_role')
            ->first();
        $penjualan = Penjualan::all();
        return view('livewire.penjualan-component', ['penjualan' => $penjualan, 'user' => $user, 'data' => $data]);
    }
}
