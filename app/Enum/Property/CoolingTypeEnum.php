<?php

namespace App\Enum\Property;

Enum CoolingTypeEnum: int
{
    case COOLING_FAN = 1;
    case CENTRAL_AC= 2;
    case EVAPORATIVE_COOLER = 3;
    case MULTI_ZONE = 4;
    case WHOLE_HOUSE_ATTIC_FAN = 5;
    case WINDOW_WALL_UNIT = 6;
    case NONE = 7;
    case OTHER = 8;
}
