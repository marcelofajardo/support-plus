<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageInputWithPreview extends Component
{
    public $name, $src;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $src = null)
    {
        $this->name = $name;
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        $id = uniqid() . rand(1, 9999);
        $name = $this->name;
        $src = $this->src;
        return view('components.image-input-with-preview', compact('id', 'name', 'src'));
    }
}
