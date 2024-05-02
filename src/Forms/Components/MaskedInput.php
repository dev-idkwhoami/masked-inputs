<?php

namespace DevIDKWHOAMI\MaskedInputs\Forms\Components;

use Filament\Forms\Components\Field;
use Filament\Support\RawJs;

class MaskedInput extends Field
{
    protected string $view = 'masked-inputs::forms.components.masked-input';

    protected RawJs $options;

    public function options(RawJs | \Closure $options): static
    {
        $this->options = $this->evaluate($options);

        return $this;
    }

    public function getOptions(): RawJs
    {
        return $this->options;
    }
}
