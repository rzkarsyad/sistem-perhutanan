<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProduksiComponent extends Component
{
    public $rph, $nama_petak, $nama_petani, $bulan, $tahun, $produksi_dkp;

    protected function rules()
    {
        return [
            'rph' => 'required',
            'nama_petak' => 'required',
            'nama_petani' => 'required',
            'bulan' => 'required',
            'tahun' => 'required|integer',
            'produksi_dkp' => 'required|integer',
        ];
    }

    protected $messages = [
        'produksi_dkp.required' => 'Kolom Produksi DKP harus di isi.',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveProduksi()
    {
        $validatedData = $this->validate();

        Produksi::create($validatedData);
        session()->flash('message', 'Data berhasil ditambahkan!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editProduksi(int $produksi_id)
    {
        $produksi = Produksi::find($produksi_id);
        if ($produksi) {
            $this->produksi_id = $produksi->id;
            $this->rph = $produksi->rph;
            $this->nama_petak = $produksi->nama_petak;
            $this->nama_petani = $produksi->nama_petani;
            $this->bulan = $produksi->bulan;
            $this->tahun = $produksi->tahun;
            $this->produksi_dkp = $produksi->produksi_dkp;
        } else {
            return redirect()->to('/produksi');
        }
    }

    public function updateProduksi()
    {
        $validatedData = $this->validate();

        Produksi::where('id', $this->produksi_id)->update([
            'rph' => $validatedData['rph'],
            'nama_petak' => $validatedData['nama_petak'],
            'nama_petani' => $validatedData['nama_petani'],
            'bulan' => $validatedData['bulan'],
            'tahun' => $validatedData['tahun'],
            'produksi_dkp' => $validatedData['produksi_dkp']
        ]);
        session()->flash('message', 'Data berhasil diubah!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteProduksi(int $produksi_id)
    {
        $this->produksi_id = $produksi_id;
    }

    public function destroyProduksi()
    {
        Produksi::find($this->produksi_id)->delete();
        session()->flash('message', 'Data berhasil dihapus!');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->rph = '';
        $this->nama_petak = '';
        $this->nama_petani = '';
        $this->bulan = '';
        $this->tahun = '';
        $this->produksi_dkp = '';
    }

    public function render()
    {
        $user = Auth::user();
        $data = DB::table('users')
            ->join('role', 'role.id', '=', 'users.role_id')
            ->where('users.id', '=', $user->id)
            ->select('users.*', 'role.name_role')
            ->first();
        $produksi = Produksi::all();
        return view('livewire.produksi-component', ['produksi' => $produksi, 'user' => $user, 'data' => $data]);
    }
}
