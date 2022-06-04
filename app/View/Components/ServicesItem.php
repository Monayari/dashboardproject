<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServicesItem extends Component
{
    public $img ;
    public $title ;
    public $description ;
    public $href ;

    public function __construct($img , $title , $description , $href)
    {
        $this->img = $img ;
        $this->title = $title ;
        $this->description = $description ;
        $this->href = $href ;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.services-item');
    }
}
