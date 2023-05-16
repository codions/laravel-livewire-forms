<?php

namespace Codions\LaravelLivewireForms\Traits;

trait WithSwitch
{
    public function switch()
    {
        $this->props['switch'] = true;

        return $this;
    }
}
