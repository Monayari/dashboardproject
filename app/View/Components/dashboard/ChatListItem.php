<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class ChatListItem extends Component
{
    public $active;
    public $img;
    public $name;
    public $icon;
    public $lastSeen;

    public function __construct($active="" , $img , $name , $icon , $lastSeen)
    {
        $this->active = $active ;
        $this->img = $img ;
        $this->name = $name ;
        $this->icon = $icon ;
        $this->lastSeen = $lastSeen ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.chat-list-item');
    }
}
