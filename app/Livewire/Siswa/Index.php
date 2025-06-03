<?php

namespace App\Livewire\Siswa;

use Livewire\Component;
use App\Models\Siswa;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $numpage = 10;
    public $search; 

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        Siswa::findOrFail($id)->delete();
        session()->flash('message', 'Data siswa berhasil dihapus.');
    }

    // Method for handling render
   public function render()
    {
    $query = Siswa::query();

    if (!empty($this->search)) {
        $query->where(function($q) {
            $q->where('nama', 'like', '%' . $this->search . '%')
                ->orWhere('nis', 'like', '%' . $this->search . '%');
        });
    }

    $query->orderBy('nama', 'asc');

    return view('livewire.siswa.index', [
        'siswaList' => $query->paginate($this->numpage),
        ]);
    }



    // Method to update number of items per page
    public function updatePageSize($size)
    {
        $this->numpage = $size;
    }
    
    public function ketGender($gender)
    {
        if ($gender === 'L') {
            return 'Laki-laki';
        } elseif ($gender === 'P') {
            return 'Perempuan';
        } else {
            return 'Status tidak diketahui';
        }
    }

    public function ketStatusPKL($status)
    {
        if ($status === 0) {
            return 'Belum diterima PKL';
        } elseif ($status === 1) {
            return 'Sudah diterima PKL';
        } else {
            return 'Status tidak diketahui';
        }
    }
}