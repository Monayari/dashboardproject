<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AboutFeatureSmall extends Component
{
    public $secend ;
    public $icon ;
    public $title ;
    public $description ;
    public $href ;

    public function __construct($secend , $icon , $title , $description , $href)
    {
        $this->secend = $secend ;
        $this->icon = $icon ;
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
        return view('components.about-feature-small');
    }
}
