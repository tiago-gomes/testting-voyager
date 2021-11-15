<?php

namespace App\Enum\Property;

Enum ConstructionTypeEnum: int
{
    case ADOBE = 1;
    case BRICK = 2;
    case BRICK_REINFORCED = 3;
    case BRICK_UN_REINFORCED = 4;
    case CIDER_BLOCK = 5;
    case CONCRETE = 6;
    case CONCRETE_BLOCK = 7;
    case LOG = 8;
    case LOW_VOC_FINISHES = 9;
    case MASONRY = 10;
    case METAL = 11;
    case MODULAR = 12;
    case NON_CONFORMING = 13;
    case RAMMED_EARTH = 14;
    case SHINGLE = 15;
    case STEEL = 16;
    case STEEL_FRAME = 17;
    case STONE = 18;
    case STUCCO = 19;
    case TILT_UP = 20;
    case VINYL_SIDLING = 21;
    case WOOD = 22;
    case WOOD_FRAME = 23;
    case OTHER = 24;
}
