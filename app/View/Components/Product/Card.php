<?php

namespace App\View\Components\Product;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Card extends Component
{
    public $product;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $product
    )
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product.card');
    }
}
