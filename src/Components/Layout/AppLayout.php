<?php

namespace Yab\SweetUi\Components\Layout;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AppLayout extends Component
{
    /**
     * Title of the App
     *
     * @var string
     */
    protected $title;

    public function __construct(string $title = '')
    {
        $this->title = $title;
    }

    public function render(): View
    {
        return view('yab-sweet-ui::components.layout.app');
    }

    public function title(): string
    {
        return $this->title ?: (string) config('app.name', 'Laravel');
    }
}
