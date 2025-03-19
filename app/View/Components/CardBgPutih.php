<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardBgPutih extends Component
{
    public $image;
    public $title;
    public $date;
    public $category;
    public $description;
    public $link;

    public function __construct($image, $title, $date, $category, $description, $link)
    {
        $this->image = $image;
        $this->title = $title;
        $this->date = $date;
        $this->category = $category;
        $this->description = $description;
        $this->link = $link;
    }

    public function render(): View|Closure|string
    {
        return view('components.card-bg-putih');
    }
}
