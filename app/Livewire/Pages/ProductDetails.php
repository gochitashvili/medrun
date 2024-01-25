<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProductDetails extends Component
{
    #[Title('Product Details')] 
    #[Layout('components/layouts.centered')] 
    public function render()
    {
        return view('livewire.pages.product-details');
    }
}
