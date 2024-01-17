<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Title;

use Livewire\Component;

class ProductDetails extends Component
{
    #[Title('Product Details')] 
    public function render()
    {
        return view('livewire.pages.product-details');
    }
}
