<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CommentItem extends Component
{
    public $img ;
    public $name ;
    public $date ;
    public $content ;
    public function __construct($img , $name , $date , $content)
    {
        $this->img = $img ;
        $this->name = $name ;
        $this->date = $date ;
        $this->content = $content ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comment-item');
    }
}
