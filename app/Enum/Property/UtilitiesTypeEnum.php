<?php

namespace App\Enum\Property;

Enum UtilitiesTypeEnum: int
{
    case AVAILABLE_NOT_IN_SITE = 1;
    case DIESEL = 2;
    case GENERATOR = 3;
    case INDIVIDUAL = 4;
    case INDIVIDUAL_GAS_METERS = 5;
    case NATURAL_GAS = 6;
    case PROPANE_ON_SITE = 7;
    case MASTER_METER = 8;
    case PUBLIC_UTILITIES = 9;
    case SOLAR_HOT_WATER_HEATER_LEASED = 10;
    case SOLAR_HOT_WATER_HEATER_OWNED = 11;
    case SOLAR_PANELS = 12;
    case SOLAR_PANELS_LIEN = 13;
    case SOLAR_PANELS_OWNED = 14;
    case WIND = 15;
    case NONE = 16;
    case OTHER = 17;
}
