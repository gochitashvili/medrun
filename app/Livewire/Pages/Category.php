<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Title;

use Livewire\Component;

class Category extends Component
{

    #[Title('Category')] 
    public function render()
    {
        return view('livewire.pages.category');
    }
}
