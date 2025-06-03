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
    public $titleColor;
    public $dateColor;
    public $hoverBorder;
    public $readMoreText;
    public $cardWidth;
    public $imageHeight;
    public $alt;

    public function __construct($image, $title, $date, $category, $description, $link, $type, $readMoreText = 'Baca Selengkapnya', $cardWidth = 'w-[400px]', $imageHeight = 'h-[260px]', $alt = 'berita terkini')
    {
        $this->image = $image;
        $this->title = $title;
        $this->date = $date;
        $this->category = $category;
        $this->description = $description;
        $this->link = $link;
        $this->type = $type;
        $this->readMoreText = $readMoreText;
        $this->cardWidth = $cardWidth;
        $this->imageHeight = $imageHeight;
        $this->alt = $alt;

        $isBlue = $type === 'secondary';
        $this->titleColor = $isBlue ? 'text-gray10' : 'text-gray90';
        $this->textColor = $isBlue ? 'text-gray-300' : 'text-gray-600';
        $this->dateColor = $isBlue ? 'text-gray-400' : 'text-gray-500';
        $this->hoverBorder = $isBlue ? 'group-hover:border-gray-300' : 'group-hover:border-primary30';
    }

    public function render(): View|Closure|string
    {
        return view('components.card-berita');
    }
}

