<?php

namespace Codions\LaravelLivewireForms\Components;

use Codions\LaravelLivewireForms\Traits\WithDisabled;
use Codions\LaravelLivewireForms\Traits\WithHelp;
use Codions\LaravelLivewireForms\Traits\WithModel;
use Codions\LaravelLivewireForms\Traits\WithOptions;
use Codions\LaravelLivewireForms\Traits\WithPrefix;
use Codions\LaravelLivewireForms\Traits\WithSizing;
use Illuminate\View\Component;

class Select extends Component
{
    use WithPrefix;
    use WithOptions;
    use WithSizing;
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
            'placeholder' => null,
            'options' => [],
            'small' => false,
            'large' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'disabled' => false,
        ];

        return $component;
    }

    public function placeholder($placeholder)
    {
        $this->props['placeholder'] = $placeholder;

        return $this;
    }

    public function render()
    {
        return view('laravel-livewire-forms::select');
    }
}
