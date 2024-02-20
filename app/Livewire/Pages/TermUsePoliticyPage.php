<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class TermUsePoliticyPage extends Component
{
    #[Title('Termos e Politicas')]
    public function render()
    {
        return view('livewire.pages.term-use-politicy-page')->layout('layouts.layout');
    }
}
