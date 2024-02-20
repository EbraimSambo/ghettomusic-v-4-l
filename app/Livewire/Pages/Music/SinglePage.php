<?php

namespace App\Livewire\Pages\Music;

use App\Models\Music;
use Livewire\Component;

class SinglePage extends Component
{
    public $music;
    
    public function mount($slug) {
        $this->music = Music::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.pages.music.single-page',[
            'similars'=> $this->music->inRandomOrder()->where('category', $this->music->category)->get(),
            'autor'=> $this->music->all()->where('artist', $this->music->artist),
            'topSimilars'=> $this->music->where('download', '>', 0)->orderByDesc('download')->take(8)
                        ->where('category', $this->music->category)->get(),
        ])->layout('layouts.layout',['title'=>'Ouvir ou baixar ' .$this->music->title]);
    }
}
