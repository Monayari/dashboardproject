<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class MessageSent extends Component
{
    public $date ;
    public $name ;
    public $content ;
    public function __construct($date , $name , $content)
    {
        $this->date = $date ;
        $this->name = $name ;
        $this->content = $content ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.message-sent');
    }
}
