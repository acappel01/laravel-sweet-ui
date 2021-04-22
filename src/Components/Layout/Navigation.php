<?php

namespace Yab\SweetUi\Components\Layout;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Navigation extends Component
{
    public function render(): View
    {
        return view('yab-sweet-ui::components.layout.navigation');
    }
}
