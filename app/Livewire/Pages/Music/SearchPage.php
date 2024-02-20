<?php

namespace App\Livewire\Pages\Music;

use Livewire\Component;

class SearchPage extends Component
{
    public function render()
    {
        return view('livewire.pages.music.search-page')->layout('layouts.layout',['title'=>'Pesquisar']);
    }
}
