<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

use Livewire\Component;

class Article extends Component
{
    #[Title('Article Details')] 
    #[Layout('components/layouts.centered')] 
    public function render()
    {
        return view('livewire.pages.article');
    }
}
