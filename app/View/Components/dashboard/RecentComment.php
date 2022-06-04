<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class RecentComment extends Component
{
    public $img ;
    public $content ;
    public $name ;
    public $date ;
    public function __construct($img , $content , $name , $date)
    {
        $this->img = $img ;
        $this->content = $content ;
        $this->name = $name ;
        $this->date = $date ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.recent-comment');
    }
}
