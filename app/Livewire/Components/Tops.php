<?php

namespace App\Livewire\Components;

use App\Models\Music;
use Livewire\Component;

class Tops extends Component
{
    public function render(Music $music)
    {
        return view('livewire.components.tops',[
            'tops'=>$music->where('download', '>', 0)->orderByDesc('download')->take(8)->get()
        ]);
    }
}
