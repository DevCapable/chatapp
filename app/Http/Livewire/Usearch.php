<?php


namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Usearch extends Component
{
    public  $Usearch ="";
    public function render()
    {
        return view('livewire.Usearch',[
            'users2'=> User::where('name','like', '%'. $this->Usearch. '%')->get()
        ]);
    }
}
