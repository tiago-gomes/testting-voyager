<?php

namespace App\Enum\Property;

Enum SecondaryLivingSpaceTypeEnum: int
{
    case APARTMENT_OVER_GARAGE = 1;
    case ACCESSORY_DWELLING_UNIT = 2;
    case GUEST_HOUSE = 3;
    case OTHER = 4;
}
