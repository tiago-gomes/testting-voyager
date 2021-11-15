<?php

namespace App\Enum\Property;

Enum LotDescriptionTypeEnum: int
{
    case ADDITIONAL_LAND_AVAILABLE = 1;
    case AGRICULTURAL_USE = 2;
    case CORNERS_MARKED = 3;
    case CORNERS_MARKED_NO = 4;
    case FARM_ANIMALS_PERMITTED = 5;
    case FARM_ANIMALS_RESTRICTED = 6;
    case FISHING = 7;
    case FLAG_LOT = 8;
    case GRADE_GENTLY_SLOPED = 9;
    case GRADE_HILLY = 10;
    case GRADE_LEVEL = 11;
    case GRADE_MOSTLY_LEVEL = 12;
    case GRADE_ROLLING = 13;
    case GRADE_SIDE_SLOPE = 14;
    case GRADE_SLOPED_DOWN = 15;
    case GRADE_SLOPED_UP = 16;
    case GRADE_STEEP = 17;
    case GRADE_VARIES = 18;
    case GROUND_FLOOR = 19;
    case HUNTING = 20;
    case LAND_LOCKED = 21;
    case PAVED = 22;
    case PRE_SHAPED = 23;
    case PIE_SHAPED = 24;
    case POND_ON_SITE = 25;
    case POSSIBLE_LOT_SPLIT = 26;
    case POTENTIAL_RE_ZONE = 27;
    case PRIVATE_SECLUDED = 28;
    case REGULAR = 29;
    case STAKED_BOUNDARY = 30;
    case STREAM_SEASONAL = 31;
    case STREAM_YEAR_ROUND = 32;
    case SUBDIVIDED = 33;
    case SURVEYED = 34;
    case T_INTERSECTION = 35;
    case UNKNOWN = 36;
    case VIEWS = 37;
    case VINEYARD = 38;
    case ZERO_LOT_LINE = 39;
    case NONE = 40;
    case OTHER = 41;
}
