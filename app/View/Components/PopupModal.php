<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Modules\Announcement\Models\Popup;

class PopupModal extends Component
{

    public function __construct()
    {
        //
    }

    public function render()
    {
        $popups = Popup::where('status', 1)->orderBy('order', 'asc')->get();
        return view('components.popup-modal', compact('popups'));
    }
}
