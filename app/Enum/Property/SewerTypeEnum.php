<?php

namespace App\Enum\Property;

Enum SewerTypeEnum: int
{
    case CESSPOOL = 1;
    case COMMUNITY_SEWER = 2;
    case DRAINAGE_NONE = 3;
    case DRAINAGE_OTHER = 4;
    case DRAINAGE_PUBLIC_STORAGE = 5;
    case DRAINAGE_SUMP = 6;
    case EXISTING_SEPTIC = 7;
    case SEPTIC_PLANS_APPROVED = 8;
    case SEPTIC_ABANDONMENT = 9;
    case SEPTIC_ENGINEERED = 10;
    case SEPTIC_PERC_TEST_REQUIRED = 11;
    case SEPTIC_STANDARD = 12;
    case SEPTIC_SYSTEM_VESTED = 13;
    case SEPTIC_TANK_PUMP = 14;
    case SEWER_PRIVATE = 15;
    case SEWER_PUBLIC = 16;
    case SEWER_AVAILABLE = 17;
    case SEWER_AVAILABLE_AT_SITE = 18;
    case SEWER_CONNECTED = 19;
    case SEWER_CONNECTED_SMALLER_500_FT_AWAY = 20;
    case SEWER_CONNECTED_BIGGER_500_FT_AWAY = 21;
    case SEWER_IN_STREET = 22;
    case SEWER_NOT_STREET = 23;
    case SEWER_NOT_CONNECTED = 24;
    case SEWER_ON_BOND = 25;
    case SPECIAL = 26;
    case STORAGE_TANK = 27;
    case SUMP_PUMP = 28;
    case TBD = 29;
    case UNKNOWN = 30;
    case NONE = 31;
    case OTHER = 32;
}
