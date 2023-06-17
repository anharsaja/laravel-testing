<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{

    public $product;
    
    public function mount($id)
    {
        $productDrtail = Product::find($id);

        if($productDrtail)
        {
            $this -> product = $productDrtail;
        }
    }
    
    public function render()
    {
        return view('livewire.product-detail')->layout('livewire.layouts.app');
    }
}
