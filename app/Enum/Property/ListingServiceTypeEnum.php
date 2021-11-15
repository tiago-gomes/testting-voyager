<?php

namespace App\Enum\Property;

Enum ListingServiceTypeEnum: int
{
    case FULL_SERVICE = 1;
    case LIMITED_SERVICE = 2;
    case MLS_ENTRY_ONLY = 3;
    case RESTRICTED = 4;
}
