<?php

namespace App\Http\Livewire;

use App\Models\Petak;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PetakComponent extends Component
{
    public $rph, $nama_petak, $tahun_tanam, $luas_lahan, $jenis_bibit, $jml_pohon;

    protected function rules()
    {
        return [
            'rph' => 'required',
            'nama_petak' => 'required',
            'tahun_tanam' => 'required|integer',
            'luas_lahan' => 'required|integer',
            'jenis_bibit' => 'required',
            'jml_pohon' => 'required|integer',
        ];
    }

    protected $messages = [
        'jml_pohon.required' => 'Kolom jumlah pohon harus di isi.',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function savePetak()
    {
        $validatedData = $this->validate();

        Petak::create($validatedData);
        session()->flash('message', 'Data berhasil ditambahkan!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editPetak(int $petak_id)
    {
        $petak = Petak::find($petak_id);
        if ($petak) {
            $this->petak_id = $petak->id;
            $this->rph = $petak->rph;
            $this->nama_petak = $petak->nama_petak;
            $this->tahun_tanam = $petak->tahun_tanam;
            $this->luas_lahan = $petak->luas_lahan;
            $this->jenis_bibit = $petak->jenis_bibit;
            $this->jml_pohon = $petak->jml_pohon;
        } else {
            return redirect()->to('/petak');
        }
    }

    public function updatePetak()
    {
        $validatedData = $this->validate();

        Petak::where('id', $this->petak_id)->update([
            'rph' => $validatedData['rph'],
            'nama_petak' => $validatedData['nama_petak'],
            'tahun_tanam' => $validatedData['tahun_tanam'],
            'luas_lahan' => $validatedData['luas_lahan'],
            'jenis_bibit' => $validatedData['jenis_bibit'],
            'jml_pohon' => $validatedData['jml_pohon'],
        ]);
        session()->flash('message', 'Data berhasil diubah!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deletePetak(int $petak_id)
    {
        $this->petak_id = $petak_id;
    }

    public function destroyPetak()
    {
        Petak::find($this->petak_id)->delete();
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
        $this->tahun_tanam = '';
        $this->luas_lahan = '';
        $this->jenis_bibit = '';
        $this->jml_pohon = '';
    }

    public function render()
    {
        $user = Auth::user();
        $data = DB::table('users')
            ->join('role', 'role.id', '=', 'users.role_id')
            ->where('users.id', '=', $user->id)
            ->select('users.*', 'role.name_role')
            ->first();
        $petak = Petak::all();
        return view('livewire.petak-component', ['petak' => $petak, 'user' => $user, 'data' => $data]);
    }
}
