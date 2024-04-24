<?php

namespace App\Enums;

use Filament\Support\Concerns\HasColor;
use Filament\Support\Contracts\HasLabel;

enum AppointmentStatus: string implements HasLabel, HasColor
{
    case Created = 'created';
    case Confirmed = 'confirmed';
    case Canceled = 'canceled';


    public function getLabel(): ?string
    {
        return $this->name;
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::Created => 'warning',
            self::Confirmed => 'success',
            self::Canceled => 'danger',
        };
    }

}
