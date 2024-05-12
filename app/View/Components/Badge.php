<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Badge extends Component
{
    // public $content;
    // public $classes;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $content = '',
        public string $classes = '',
    )
    {
        // $this->content = $content;
        // $this->classes = $classes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.badge');
    }
}
