<?php

namespace Yab\SweetUi;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Yab\SweetUi\Components\Layout\AppLayout;
use Yab\SweetUi\Components\Layout\Navigation;
use Yab\SweetUi\Components\Layout\Splash;

class SweetUiServiceProvider extends ServiceProvider
{
    protected $classComponents = [
        AppLayout::class => 'layout.app',
        Navigation::class => 'layout.navigation',
        Splash::class => 'splash',

        'yab-sweet-ui::components.layout.app-header' => 'layout.app-header',

        'yab-sweet-ui::components.buttons.primary' => 'buttons.primary',
        'yab-sweet-ui::components.buttons.button' => 'buttons.button',
        'yab-sweet-ui::components.buttons.delete' => 'buttons.delete',

        'yab-sweet-ui::components.input.date' => 'input.date',
        'yab-sweet-ui::components.input.group' => 'input.group',
        'yab-sweet-ui::components.input.price' => 'input.price',
        'yab-sweet-ui::components.input.select' => 'input.select',
        'yab-sweet-ui::components.input.text' => 'input.text',
        'yab-sweet-ui::components.input.textarea' => 'input.textarea',
        'yab-sweet-ui::components.input.toggle' => 'input.toggle',
        'yab-sweet-ui::components.input.label' => 'input.label',
        'yab-sweet-ui::components.input.select-option' => 'input.select-option',

        'yab-sweet-ui::components.tabs.list-item' => 'tabs.list-item',
        'yab-sweet-ui::components.tabs.list' => 'tabs.list',

        'yab-sweet-ui::components.action-button' => 'action-button',
        'yab-sweet-ui::components.action-card' => 'action-card',
        'yab-sweet-ui::components.action-dropdown' => 'action-dropdown',
        'yab-sweet-ui::components.action-form' => 'action-form',
        'yab-sweet-ui::components.action-link' => 'action-link',

        'yab-sweet-ui::components.alert' => 'alert',
        'yab-sweet-ui::components.auth-card' => 'auth-card',
        'yab-sweet-ui::components.auth-session-status' => 'auth-session-status',
        'yab-sweet-ui::components.auth-validation-errors' => 'auth-validation-errors',

        'yab-sweet-ui::components.dropdown' => 'dropdown',
        'yab-sweet-ui::components.dropdown-link' => 'dropdown-link',
        'yab-sweet-ui::components.nav-link' => 'nav-link',
        'yab-sweet-ui::components.notice' => 'notice',
        'yab-sweet-ui::components.table-search' => 'table-search',
        'yab-sweet-ui::components.validation-errors' => 'validation-errors',
    ];
    
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            foreach ($this->classComponents as $component => $alias) {
                $blade->component($component, $alias, config('sweet-ui.prefix'));
            }
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/sweet-ui.php', 'sweet-ui');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'yab-sweet-ui');
    }
}
