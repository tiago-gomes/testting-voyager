<?php

namespace App\Enum\Property;

Enum WaterTypeEnum: int
{
    case INDIVIDUAL_WATER_METER = 1;
    case IRRIGATION_CONNECTED = 2;
    case IRRIGATION_WATER_AVAILABLE = 3;
    case PRIVATE_CO_UP = 4;
    case PRIVATE_OR_MUTUAL = 5;
    case PUBLIC = 6;
    case RESERVOIR = 7;
    case RIVER = 8;
    case SPRING = 9;
    case STOCK_WATER = 10;
    case STORAGE_TANK = 11;
    case STREAM_SEASONAL = 12;
    case STREAM_YEAR_ROUND = 13;
    case UNKNOWN = 14;
    case UNTREATED = 15;
    case WATER_AVAILABLE_ON_STREET = 16;
    case WATER_FILTER_LEASED = 17;
    case WATER_FILTER_OWNED = 18;
    case WATER_ON_SITE = 19;
    case WATER_PURIFIER_LEASED = 20;
    case WATER_PURIFIED_OWNED = 21;
    case WATER_RIGHTS_NOT_INCLUDED = 22;
    case WATER_SOFTENER_LEASED = 23;
    case WATER_SOFTENER_OWNED = 24;
    case WATER_TREATMENT_SYSTEM = 25;
    case WELL = 26;
    case WELL_AGRICULTURAL = 27;
    case WELL_DOMESTIC = 28;
    case WELL_SHARED = 29;
    case NONE = 30;
    case OTHER = 31;
}
