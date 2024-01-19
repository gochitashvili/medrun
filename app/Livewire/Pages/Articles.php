<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Title;
use Livewire\Component;

class Articles extends Component
{

    #[Title('Articles')] 
    public function render()
    {
        return view('livewire.pages.articles');
    }
}
