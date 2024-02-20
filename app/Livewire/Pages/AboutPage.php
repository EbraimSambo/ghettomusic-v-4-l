<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class AboutPage extends Component
{
    #[Title('Sobre Nós')]
    public function render()
    {
        return view('livewire.pages.about-page')->layout('layouts.layout');;
    }
}
