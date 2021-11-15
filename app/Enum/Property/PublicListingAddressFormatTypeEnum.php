<?php

namespace App\Enum\Property;

Enum PublicListingAddressFormatTypeEnum: int
{
    case SHOW_FULL_ADDRESS = 1;
    case SHOW_STREET_CITY_ZIP = 2;
    case SHOW_CITY_ZIP_ONLY = 3;
}
