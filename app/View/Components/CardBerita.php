<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardBerita extends Component
{
    public $image;
    public $title;
    public $date;
    public $category;
    public $description;
    public $link;
    public $type;
    public $textColor;
    public $dateColor;
    public $hoverBorder;

    public function __construct($image, $title, $date, $category, $description, $link, $type)
    {
        $this->image = $image;
        $this->title = $title;
        $this->date = $date;
        $this->category = $category;
        $this->description = $description;
        $this->link = $link;
        $this->type = $type;

        $isBiru = $type === 'biru';
        $this->textColor = $isBiru ? 'text-gray10' : 'text-gray70';
        $this->dateColor = $isBiru ? 'text-gray-300' : 'text-gray70';
        $this->hoverBorder = $isBiru ? 'group-hover:border-gray-300' : 'group-hover:border-primary30';
    }

    public function render(): View|Closure|string
    {
        return view('components.card-berita');
    }
}
