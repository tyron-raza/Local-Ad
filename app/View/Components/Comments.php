<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Listing;

class Comments extends Component
{
    public $post;

    public function __construct(Listing $post)
    {
        $this->post = $post->load('comments.user');
    }

    public function render()
    {
        return view('components.comments');
    }
}