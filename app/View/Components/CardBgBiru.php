<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardBgBiru extends Component
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

    public function render()
    {
        return view('components.card-bg-biru');
    }
}
