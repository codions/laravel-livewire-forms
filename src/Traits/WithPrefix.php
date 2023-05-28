<?php

namespace Codions\LaravelLivewireForms\Traits;

trait WithPrefix
{
    public function prefix($prefix)
    {
        $this->props['prefix'] = $prefix . '.';

        return $this;
    }
}
