<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PricingItem extends Component
{
    public $secend;
    public $active;
    public $title;
    public $counter;
    public $price;
    public $class;
    public function __construct($secend , $active = "" , $title , $counter , $price , $class)
    {
        $this->secend = $secend ;
        $this->active = $active ;
        $this->title = $title ;
        $this->counter = $counter ;
        $this->price = $price ;
        $this->class = $class ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pricing-item');
    }
}
