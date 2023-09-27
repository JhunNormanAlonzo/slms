<?php

namespace App\Http\Livewire;

use App\Models\Software;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Livewire\WithPagination;

class ListSoftware extends Component
{
    use WithPagination;


    public function render()
    {

        if (Cache::has('software')){
            $softwares = Cache::get('software');
        }else{
            $softwares = Cache::remember('software', 60*60, function (){
                return Software::all();
            });
        }
        return view('livewire.list-software', compact('softwares'));
    }
}
