<?php

namespace App\View\Components\Product;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TagItem extends Component
{
    public string $tag = '';
    /**
     * Create a new component instance.
     */
    public function __construct($tag)
    {
        //
        $this->tag = $tag;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product.tag-item');
    }
}
