<?php

namespace App\Livewire\Pages\Music\Categores;

use Livewire\Component;

class CategoresPage extends Component
{
    public function render()
    {
        return view('livewire.pages.music.categores.categores-page')->layout('layouts.layout',['title'=>'Categorias']);
    }
}
