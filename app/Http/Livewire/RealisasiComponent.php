<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Realisasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RealisasiComponent extends Component
{
    public $nama_pabrik, $lokasi_pabrik, $rph, $nama_petak, $produksi_dkp, $nama_pengolah, $produksi_mkp, $rendemen;

    protected function rules()
    {
        return [
            'nama_pabrik' => 'required',
            'lokasi_pabrik' => 'required',
            'rph' => 'required',
            'nama_petak' => 'required',
            'produksi_dkp' => 'required|integer',
            'nama_pengolah' => 'required',
            'produksi_mkp' => 'required|integer',
            'rendemen' => 'required',
        ];
    }

    protected $messages = [
        'produksi_dkp.required' => 'Kolom Produksi DKP harus di isi.',
        'produksi_mkp.required' => 'Kolom Produksi MKP harus di isi.',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveRealisasi()
    {
        $validatedData = $this->validate();

        Realisasi::create($validatedData);
        session()->flash('message', 'Data berhasil ditambahkan!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editRealisasi(int $realisasi_id)
    {
        $realisasi = Realisasi::find($realisasi_id);
        if ($realisasi) {
            $this->realisasi_id = $realisasi->id;
            $this->nama_pabrik = $realisasi->nama_pabrik;
            $this->lokasi_pabrik = $realisasi->lokasi_pabrik;
            $this->rph = $realisasi->rph;
            $this->nama_petak = $realisasi->nama_petak;
            $this->produksi_dkp = $realisasi->produksi_dkp;
            $this->nama_pengolah = $realisasi->nama_pengolah;
            $this->produksi_mkp = $realisasi->produksi_mkp;
            $this->rendemen = $realisasi->rendemen;
        } else {
            return redirect()->to('/realisasi');
        }
    }

    public function updateRealisasi()
    {
        $validatedData = $this->validate();

        Realisasi::where('id', $this->realisasi_id)->update([
            'nama_pabrik' => $validatedData['nama_pabrik'],
            'lokasi_pabrik' => $validatedData['lokasi_pabrik'],
            'rph' => $validatedData['rph'],
            'nama_petak' => $validatedData['nama_petak'],
            'produksi_dkp' => $validatedData['produksi_dkp'],
            'nama_pengolah' => $validatedData['nama_pengolah'],
            'produksi_mkp' => $validatedData['produksi_mkp'],
            'rendemen' => $validatedData['rendemen'],
        ]);
        session()->flash('message', 'Data berhasil diubah!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteRealisasi(int $realisasi_id)
    {
        $this->realisasi_id = $realisasi_id;
    }

    public function destroyRealisasi()
    {
        Realisasi::find($this->realisasi_id)->delete();
        session()->flash('message', 'Data berhasil dihapus!');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->nama_pabrik = '';
        $this->lokasi_pabrik = '';
        $this->rph = '';
        $this->nama_petak = '';
        $this->produksi_dkp = '';
        $this->nama_pengolah = '';
        $this->produksi_mkp = '';
        $this->rendemen = '';
    }

    public function render()
    {
        $user = Auth::user();
        $data = DB::table('users')
            ->join('role', 'role.id', '=', 'users.role_id')
            ->where('users.id', '=', $user->id)
            ->select('users.*', 'role.name_role')
            ->first();
        $realisasi =  Realisasi::all();
        return view('livewire.realisasi-component', ['realisasi' => $realisasi, 'user' => $user, 'data' => $data]);
    }
}
