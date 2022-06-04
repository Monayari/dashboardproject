<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class LineOrderCard extends Component
{
    public $img ;
    public $name ;
    public $product ;
    public $status ;
    public $count ;
    public $color ;
    public $progress ;
    public $width ;
    public function __construct($img , $name , $product , $status , $count , $color , $progress , $width )
    {
        $this->img = $img ;
        $this->name = $name ;
        $this->product = $product ;
        $this->status = $status ;
        $this->count = $count ;
        $this->color = $color ;
        $this->progress = $progress ;
        $this->width = $width ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.line-order-card');
    }
}
