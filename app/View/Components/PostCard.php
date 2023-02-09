<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{
    public $post;

    public function __construct($post)
    {
        $this->post = $post;
    }

    public function render(): View
    {
        return view('components.post-card');
    }
}
