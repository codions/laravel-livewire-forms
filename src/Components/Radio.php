<?php

namespace Codions\LaravelLivewireForms\Components;

use Codions\LaravelLivewireForms\Traits\WithDisabled;
use Codions\LaravelLivewireForms\Traits\WithHelp;
use Codions\LaravelLivewireForms\Traits\WithModel;
use Codions\LaravelLivewireForms\Traits\WithOptions;
use Codions\LaravelLivewireForms\Traits\WithPrefix;
use Codions\LaravelLivewireForms\Traits\WithSwitch;
use Illuminate\View\Component;

class Radio extends Component
{
    use WithPrefix;
    use WithOptions;
    use WithSwitch;
    use WithHelp;
    use WithModel;
    use WithDisabled;

    public $props = [];

    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'options' => [],
            'switch' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'type' => 'radio',
            'disabled' => false,
        ];

        return $component;
    }

    public function render()
    {
        return view('laravel-livewire-forms::radio');
    }
}
