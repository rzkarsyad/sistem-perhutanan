<?php

namespace App\Http\Livewire;

use App\Models\Petani;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PetaniComponent extends Component
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

    public function savePetani()
    {
        $validatedData = $this->validate();

        Petani::create($validatedData);
        session()->flash('message', 'Data berhasil ditambahkan!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editPetani(int $petani_id)
    {
        $petani = Petani::find($petani_id);
        if ($petani) {
            $this->petani_id = $petani->id;
            $this->nama = $petani->nama;
            $this->alamat = $petani->alamat;
            $this->no_hp = $petani->no_hp;
        } else {
            return redirect()->to('/petani');
        }
    }

    public function updatePetani()
    {
        $validatedData = $this->validate();

        Petani::where('id', $this->petani_id)->update([
            'nama' => $validatedData['nama'],
            'alamat' => $validatedData['alamat'],
            'no_hp' => $validatedData['no_hp'],
        ]);
        session()->flash('message', 'Data berhasil diubah!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deletePetani(int $petani_id)
    {
        $this->petani_id = $petani_id;
    }

    public function destroyPetani()
    {
        Petani::find($this->petani_id)->delete();
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
        $petani = Petani::all();
        return view('livewire.petani-component', ['petani' => $petani, 'user' => $user, 'data' => $data]);
    }
}
