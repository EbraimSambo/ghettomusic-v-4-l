<?php

namespace App\Livewire\Pages\Music\Categores;

use App\Models\Music;
use Livewire\Component;

class CategoryPage extends Component
{
    public $category;
    public $categoryPage;

    
    public function mount($category, Music $music) {
        $this->categoryPage = urldecode($category);
        $this->category = $music->all()->where('category', $category);
    }
    public function render()
    {
        return view('livewire.pages.music.categores.category-page')->layout('layouts.layout',['title'=>'Categoria: '.ucfirst($this->categoryPage)]);
    }
}
