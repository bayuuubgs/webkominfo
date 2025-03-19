<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonShare extends Component
{
    public $url;
    public $text;
    public $icon;

    public function __construct($url = '#', $text = 'Share', $icon = '🔗')
    {
        $this->url = $url;
        $this->text = $text;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('components.button-share');
    }
}
