<?php

namespace App\View\Components\Product;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Tags extends Component
{
    public array $tags = [];
    /**
     * Create a new component instance.
     */
    public function __construct($tags)
    {
        $this->tags = $tags;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product.tags');
    }
}
