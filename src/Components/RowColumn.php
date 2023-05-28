<?php

namespace Codions\LaravelLivewireForms\Components;

use Codions\LaravelLivewireForms\Traits\WithDisabled;
use Codions\LaravelLivewireForms\Traits\WithHelp;
use Codions\LaravelLivewireForms\Traits\WithPrefix;
use Illuminate\View\Component;

class RowColumn extends Component
{
    use WithHelp;
    use WithDisabled;
    use WithPrefix;

    public $props = [];

    public $attrs = [];

    public $column_class = 'col-md-6 mb-2 mb-md-0';

    public $row_class;

    public static function make($label = null)
    {
        $component = new static;

        $component->props = [
            // 'name' => $name,
            // 'label' => $label,
            'fields' => [],
            'help' => null,
        ];

        $component->attrs = [
            'disabled' => false,
        ];

        return $component;
    }

    public function colSize($col = 'mb-2')
    {
        $this->column_class = "$col mb-2 mb-md-0";

        return $this;
    }

    public function fields($fields = [])
    {
        $this->props['fields'] = $fields;

        return $this;
    }

    public function render()
    {
        return view('laravel-livewire-forms::column');
    }
}
