<?php

namespace App\Livewire\Pages\Music;

use App\Models\Music;
use Livewire\Attributes\Title;
use Livewire\Component;

class IndexMusicPage extends Component
{
    public $category;

    #[Title('Músicas')]
    public function render(Music $music)
    {
        return view('livewire.pages.music.index-music-page',[
            'musics' => $music->all(),
        ])->layout('layouts.layout');
    }

}
