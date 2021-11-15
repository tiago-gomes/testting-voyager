<?php

namespace App\Enum\Property;

Enum ListingStatusTypeEnum: int
{
    case ACTIVE = 1;
    case COMING_SOON = 2;
    case COMP_ONLY = 3;
}
