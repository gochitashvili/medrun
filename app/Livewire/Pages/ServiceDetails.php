<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Title;
use Livewire\Component;

class ServiceDetails extends Component
{
    #[Title('Service Details')] 
    public function render()
    {
        return view('livewire.pages.service-details');
    }
}
