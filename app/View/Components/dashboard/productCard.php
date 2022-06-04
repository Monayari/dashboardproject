<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class productCard extends Component
{
    public $img1;
    public $img2;
    public $percent;
    public $name;
    public $price;
    public $offPrice;
    public $stars ;

    public function __construct($img1 , $img2 , $percent , $name , $price , $offPrice , $stars)
    {
       $this->img1 = $img1 ;
       $this->img2 = $img2 ;
       $this->percent = $percent ;
       $this->name = $name ;
       $this->price = $price ;
       $this->offPrice = $offPrice ;
       $this->stars = $stars ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.product-card');
    }
}
