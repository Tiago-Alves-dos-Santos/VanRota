<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $titulo = '';
    public $titulo_footer = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $titulo_footer = null)
    {
        $this->titulo = $titulo;
        $this->titulo_footer = $titulo_footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
