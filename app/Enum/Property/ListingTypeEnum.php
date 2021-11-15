<?php

namespace App\Enum\Property;

Enum ListingTypeEnum: int
{
    case EXCLUSIVE_AGENCY = 1;
    case EXCLUSIVE_RIGHT_TO_SELL = 2;
    case EXCLUSIVE_RIGHT_TO_SELL_WITH_RESERVATIONS = 3;
    case OPEN = 4;
    case PROBATE = 5;
}
