<?php

namespace App\Enum\Property;

Enum HeatingTypeEnum: int
{
    case BASEBOARD = 1;
    case CENTRAL_FORCED_AIR = 2;
    case CENTRAL_FORCED_AIR_GAS = 3;
    case COMMON = 4;
    case ELECTRIC = 5;
    case FIREPLACE = 6;
    case FLOOR_FURNACE = 7;
    case FORCED_AIR = 8;
    case GAS = 9;
    case HEAT_PUMP = 10;
    case HEATING_MORE_THEN_2_ZONES = 11;
    case INDIVIDUAL_ROOM_CONTROLS = 12;
    case NO_HEATING = 13;
    case PROPANE = 14;
    case RADIANT = 15;
    case RADIANT_FLOORS = 16;
    case SOLAR = 17;
    case SOLAR_GAS = 18;
    case SOLAR_WITH_BACKUP = 19;
    case SPACE_HEATER = 20;
    case STOVE_PELLET = 21;
    case STOVE_PROPANE = 22;
    case STOVE_WOOD = 23;
    case STOVE_HEATER = 24;
    case WALL_FURNACE = 25;
    case OTHER = 26;
}
