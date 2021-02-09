<?php

namespace Azuriom\Plugin\Dofus\Components;

use Illuminate\View\Component;

class StatComponent extends Component
{

    public $baseStat;

    public $permanentStat;

    public $stuffStat;

    public $image;

    public $name;

    public $separator;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($name, $image, $baseStat, $permanentStat, $stuffStat, $separator)
    {
        $this->baseStat = $baseStat;
        $this->permanentStat = $permanentStat;
        $this->stuffStat = $stuffStat;
        $this->name = $name;
        $this->image = $image;
        $this->separator = $separator;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('dofus::components.stat');
    }
}