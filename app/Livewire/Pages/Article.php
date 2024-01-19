<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Title;
use Livewire\Component;

class Article extends Component
{
    #[Title('Article Details')] 
    public function render()
    {
        return view('livewire.pages.article');
    }
}
