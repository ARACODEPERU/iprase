<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\Onlineshop\Entities\OnliItem;

class HomeFlashSale extends Component
{
    /**
     * Create a new component instance.
     */
    
    protected $products;
    public function __construct()
    {
         $this->products = OnliItem::with('product')->where('existence', 1)
                                    ->where('discount', '>', 0) // para buscar solo con descuentos
                                    ->inRandomOrder()
                                    ->limit(5)
                                    ->distinct()
                                    ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-flash-sale', [
            'products_recommended' => $this->products
        ]);
    }
}
