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

class Input extends Component
{
    use WithPrefix;
    use WithSizing;
    use WithHelp;
    use WithModel;
    use WithDisabled;
    use WithReadonly;
    use WithPlaceholder;

    public $props = [];

    public $attrs = [];

    public static function make($name, $label = null)
    {
        $component = new static;

        $component->props = [
            'name' => $name,
            'label' => $label,
            'prefix' => null,
            'append' => null,
            'prepend' => null,
            'plaintext' => false,
            'small' => false,
            'large' => false,
            'help' => null,
            'model' => '.defer',
        ];

        $component->attrs = [
            'type' => 'text',
            'inputmode' => 'text',
            'disabled' => false,
            'readonly' => false,
        ];

        return $component;
    }

    public function type($type)
    {
        $this->attrs['type'] = $type;

        if ($type == 'text') {
            $this->attrs['inputmode'] = 'text';
        } elseif ($type == 'number') {
            $this->attrs['inputmode'] = 'numeric';
        } elseif ($type == 'tel') {
            $this->attrs['inputmode'] = 'tel';
        } elseif ($type == 'search') {
            $this->attrs['inputmode'] = 'search';
        } elseif ($type == 'email') {
            $this->attrs['inputmode'] = 'email';
        } elseif ($type == 'url') {
            $this->attrs['inputmode'] = 'url';
        }

        return $this;
    }

    public function append($append)
    {
        $this->props['append'] = $append;

        return $this;
    }

    public function prepend($prepend)
    {
        $this->props['prepend'] = $prepend;

        return $this;
    }

    public function plaintext($plaintext = true)
    {
        $this->props['plaintext'] = $plaintext;
        $this->attrs['readonly'] = $plaintext;

        return $this;
    }

    public function render()
    {
        return view('laravel-livewire-forms::input');
    }
}
