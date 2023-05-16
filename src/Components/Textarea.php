<?php

namespace Codions\LaravelLivewireForms\Components;

use Codions\LaravelLivewireForms\Traits\WithDisabled;
use Codions\LaravelLivewireForms\Traits\WithHelp;
use Codions\LaravelLivewireForms\Traits\WithModel;
use Codions\LaravelLivewireForms\Traits\WithPlaceholder;
use Codions\LaravelLivewireForms\Traits\WithPrefix;
use Codions\LaravelLivewireForms\Traits\WithReadonly;
use Codions\LaravelLivewireForms\Traits\WithSizing;
use Illuminate\View\Component;

class Textarea extends Component
{
    use WithPrefix, WithSizing, WithHelp, WithModel, WithDisabled, WithReadonly, WithPlaceholder;

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
            'rows' => 3,
            'disabled' => false,
            'readonly' => false,
        ];

        return $component;
    }

    public function rows($rows = 3)
    {
        $this->attrs['rows'] = $rows;

        return $this;
    }

    public function render()
    {
        return view('laravel-livewire-forms::textarea');
    }
}
