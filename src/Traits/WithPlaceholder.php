<?php

namespace Codions\LaravelLivewireForms\Traits;

trait WithPlaceholder
{
    public function placeholder($placeholder)
    {
        $this->attrs['placeholder'] = $placeholder;

        return $this;
    }
}
