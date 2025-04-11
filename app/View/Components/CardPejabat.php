<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardPejabat extends Component
{
    public $image;
    public $name;
    public $position;

    public function __construct($image, $name, $position)
    {
        $this->image = $image;
        $this->name = $name;
        $this->position = $position;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-pejabat');
    }
}
