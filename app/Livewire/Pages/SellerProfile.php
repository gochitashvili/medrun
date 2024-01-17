<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Title;
use Livewire\Component;

class SellerProfile extends Component
{
    #[Title('Seller Profile')] 
    public function render()
    {
        return view('livewire.pages.seller-profile');
    }
}
