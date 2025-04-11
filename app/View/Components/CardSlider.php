<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardSlider extends Component
{
    public $rows;
    public $rowclass;

    public function __construct($rows = 1)
    {
        $this->rows = $rows;
        $this->rowclass = $rows == 2 ? 'grid-rows-2' : 'grid-rows-1';
    }

    public function render(): View|Closure|string
    {
        return view('components.card-slider');
    }
}
