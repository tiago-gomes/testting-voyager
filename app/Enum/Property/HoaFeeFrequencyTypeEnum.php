<?php

namespace App\Enum\Property;

Enum HoaFeeFrequencyTypeEnum: int
{
    case MONTHLY = 1;
    case QUARTERLY = 2;
    case SEMI_ANNUALLY = 3;
    case ANNUALLY = 4;
}
