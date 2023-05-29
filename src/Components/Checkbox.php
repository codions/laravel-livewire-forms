<?php

namespace Codions\LaravelLivewireForms\Components;

use Codions\LaravelLivewireForms\Traits\WithDisabled;
use Codions\LaravelLivewireForms\Traits\WithHelp;
use Codions\LaravelLivewireForms\Traits\WithModel;
use Codions\LaravelLivewireForms\Traits\WithPrefix;
use Codions\LaravelLivewireForms\Traits\WithSizing;
use Codions\LaravelLivewireForms\Traits\WithSwitch;
use Illuminate\View\Component;

class Checkbox extends Component
{
    use WithPrefix;
    use WithSwitch;
    use WithHelp;
    use WithModel;
    use WithDisabled;
    use WithSizing;

    public $props = [];

    public $attrs = [];

    public static function make($name, $label)
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'switch' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'type' => 'checkbox',
            'disabled' => false,
        ];

        return $component;
    }

    public function render()
    {
        return view('laravel-livewire-forms::checkbox');
    }
}
