<?php

namespace Codions\LaravelLivewireForms\Components;

use Codions\LaravelLivewireForms\Traits\WithDisabled;
use Codions\LaravelLivewireForms\Traits\WithHelp;
use Codions\LaravelLivewireForms\Traits\WithModel;
use Codions\LaravelLivewireForms\Traits\WithPrefix;
use Codions\LaravelLivewireForms\Traits\WithReadonly;
use Codions\LaravelLivewireForms\Traits\WithSizing;
use Illuminate\View\Component;

class Color extends Component
{
    use WithPrefix;
    use WithSizing;
    use WithHelp;
    use WithModel;
    use WithDisabled;
    use WithReadonly;

    public $props = [];

    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'small' => false,
            'large' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'type' => 'color',
            'disabled' => false,
            'readonly' => false,
        ];

        return $component;
    }

    public function render()
    {
        return view('laravel-livewire-forms::color');
    }
}
