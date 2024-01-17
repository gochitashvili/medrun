<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    #[Title('MedRun')] 
    public function render()
    {
        return view('livewire.pages.home');
    }
}
