<?php

namespace App\Livewire\Components\Music;

use App\Models\Music;
use Livewire\Component;

class LegendCounter extends Component
{
    public Music $music;
    public $count;
    public function mount(Music $music) {
        $this->music = $music;
        $this->count = $music->download;
    }
    public function download(){
        $this->music->download ++;
        $filePath = public_path('storage/' . $this->music->audio_path);
        $this->music->save();
        $this->count = $this->music->download;
        request()->session()->flash('download', 'Bilhete criado com sucess.');
    //    return response()->download($filePath, $this->music->title.' - ' .$this->music->artist . ' - Ghetto-Music '. '.' . pathinfo($this->music->audio_path, PATHINFO_EXTENSION));
    }
    public function render()
    {
        return view('livewire.components.music.legend-counter');
    }
}
