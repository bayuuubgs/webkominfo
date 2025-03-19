<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListVideoLainnya extends Component
{
    public array $videos;

    public function __construct(array $videos)
    {
        $this->videos = $videos;
    }

    public function render()
    {
        return view('components.list-video-lainnya');
    }
}
