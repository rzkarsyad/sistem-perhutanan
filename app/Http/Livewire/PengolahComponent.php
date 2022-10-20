<?php

namespace App\Http\Livewire;

use App\Models\Pengolah;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PengolahComponent extends Component
{
    public $nama, $alamat, $no_hp;

    protected function rules()
    {
        return [
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function savePengolah()
    {
        $validatedData = $this->validate();

        Pengolah::create($validatedData);
        session()->flash('message', 'Data berhasil ditambahkan!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editPengolah(int $pengolah_id)
    {
        $pengolah = Pengolah::find($pengolah_id);
        if ($pengolah) {
            $this->pengolah_id = $pengolah->id;
            $this->nama = $pengolah->nama;
            $this->alamat = $pengolah->alamat;
            $this->no_hp = $pengolah->no_hp;
        } else {
            return redirect()->to('/pengolah');
        }
    }

    public function updatePengolah()
    {
        $validatedData = $this->validate();

        Pengolah::where('id', $this->pengolah_id)->update([
            'nama' => $validatedData['nama'],
            'alamat' => $validatedData['alamat'],
            'no_hp' => $validatedData['no_hp'],
        ]);
        session()->flash('message', 'Data berhasil diubah!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deletePengolah(int $pengolah_id)
    {
        $this->pengolah_id = $pengolah_id;
    }

    public function destroyPengolah()
    {
        Pengolah::find($this->pengolah_id)->delete();
        session()->flash('message', 'Data berhasil dihapus!');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->nama = '';
        $this->alamat = '';
        $this->no_hp = '';
    }

    public function render()
    {
        $user = Auth::user();
        $data = DB::table('users')
            ->join('role', 'role.id', '=', 'users.role_id')
            ->where('users.id', '=', $user->id)
            ->select('users.*', 'role.name_role')
            ->first();
        $pengolah = Pengolah::all();
        return view('livewire.pengolah-component', ['pengolah' => $pengolah, 'data' => $data, 'user' => $user]);
    }
}
