<?php

namespace App\Enum\Property;

Enum UnitFeaturesTypeEnum: int
{
    case BELOW_GROUND = 1;
    case CORNER_UNIT = 2;
    case SPLIT_LEVEL_UNIT = 3;
    case COMMON_WALL = 4;
    case END_UNIT = 5;
    case OTHER_UNIT_ABOVE = 7;
    case OTHER_UNIT_BELOW = 8;
    case TOP_FLOOR = 9;
    case TRI_LEVEL_UNIT = 10;
    case UNIT_FACES = 11;
    case UNIT_FACES_STREET = 12;
}
