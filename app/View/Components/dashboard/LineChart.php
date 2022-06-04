<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class LineChart extends Component
{
    public $day ;
    public $week ;
    public $month ;
    public $color ;
    public $percent ;
    public function __construct($day , $week , $month , $color , $percent)
    {
       $this->day = $day ;
       $this->week = $week ;
       $this->month = $month ;
       $this->color = $color ;
       $this->percent = $percent ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.line-chart');
    }
}
