<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestimonialItem extends Component
{
  public $active ;
  public $name;
  public $job;
  public $img;
  public $description;
    public function __construct($active= "" , $name , $job , $img , $description)
    {
        $this->active = $active ;
        $this->name = $name ;
        $this->job = $job ;
        $this->img = $img ;
        $this->description = $description ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonial-item');
    }
}
