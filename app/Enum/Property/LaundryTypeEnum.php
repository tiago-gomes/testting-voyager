<?php

namespace App\Enum\Property;

Enum LaundryTypeEnum: int
{
    case COIN_OPERATED = 1;
    case COMMUNITY_FACILITY = 2;
    case DRYER = 3;
    case ELECTRICITY_HOOKUP_110 = 4;
    case ELECTRICITY_HOOKUP_220 = 5;
    case GAS_HOOKUP = 6;
    case IN_GARAGE = 7;
    case IN_UTILITY_ROOM = 8;
    case INSIDE = 9;
    case OUTSIDE = 10;
    case TUB_SINK = 11;
    case UPPER_FLOOR = 12;
    case WASHER = 13;
    case WASHER_DRYER = 14;
    case NONE = 15;
    case OTHER = 16;
}
