<?php

namespace App\Components;

use Filament\Support\Components\Component;
use Illuminate\Support\Str;

class RandomIDTextInput extends Component
{
    public static function make(string $string)
    {
    }

    public function setUp(): void
    {
        parent::setUp();
        $randomId = Str::random(8);
        $this->value($randomId)->disabled(true);
    }
}
