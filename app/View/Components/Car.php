<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Car extends Component
{
    public $maker;
    public $modelName;
    public $description;
    public $car_id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($maker, $modelName, $description, $cid )     {
        $this->maker = $maker;
        $this->modelName = $modelName;
        $this->description= $description;
        $this->car_id = $cid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|\Closure|string
     */
    public function render()
    {
        return view('components.car');
    }
}
