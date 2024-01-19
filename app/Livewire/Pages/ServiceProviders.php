<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Title;
use Livewire\Component;

class ServiceProviders extends Component
{
    #[Title('Service Providers')] 
    public function render()
    {
        return view('livewire.pages.service-providers');
    }
}
