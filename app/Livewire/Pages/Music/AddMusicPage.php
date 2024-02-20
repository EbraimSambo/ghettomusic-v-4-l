<?php

namespace App\Livewire\Pages\Music;

use Livewire\Attributes\Title;
use Livewire\Component;

class AddMusicPage extends Component
{
    #[Title('Publicar Música')]
    public function render()
    {
        return view('livewire.pages.music.add-music-page')->layout('layouts.layout');
    }
}
