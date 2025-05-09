<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardGaleri extends Component
{
    public $image;
    public $alt;

    public function __construct($image = '/storage/assets/galeri.png', $alt ='berita galeri')
    {
        $this->image = $image;
        $this->alt = $alt;
    }

    public function render(): View|Closure|string
    {
        return view('components.card-galeri');
    }
}

