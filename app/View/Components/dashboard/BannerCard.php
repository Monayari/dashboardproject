<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class BannerCard extends Component
{
    public $title ;
    public $number ;
    public $id ;
    public function __construct($title , $number , $id)
    {
       $this->title = $title ;
       $this->number = $number ;
       $this->id = $id ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.banner-card');
    }
}
