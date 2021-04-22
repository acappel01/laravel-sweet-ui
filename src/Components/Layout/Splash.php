<?php

namespace Yab\SweetUi\Components\Layout;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Splash extends Component
{
    public $welcome;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->welcome = $this->welcomeMessage();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render(): View
    {
        return view('yab-sweet-ui::components.splash');
    }

    protected function welcomeMessage() : string
    {
        $time = date("H");
        if ($time < "12") {
            return 'Good morning,';
        }
        if ($time < "17") {
            return 'Good afternoon,';
        }
        return 'Good evening,';
    }
}
