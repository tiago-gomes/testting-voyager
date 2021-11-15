<?php

namespace App\Enum\Property;

Enum FenceTypeEnum: int
{
    case BARBED_WIRE = 1;
    case CHAIN_LINK = 2;
    case COMPLETE_PERIMETER = 3;
    case CROSS_FENCED = 4;
    case ELECTRIFIED = 5;
    case FENCED = 6;
    case FENCED_BACK = 7;
    case FENCED_FRONT = 8;
    case GATE = 9;
    case HORSE_FENCING = 10;
    case MIXED_HEIGHT_OR_TYPE = 11;
    case NOT_SURVEYED = 12;
    case PARTIAL_CROSS_FENCED = 13;
    case PARTIAL_FENCING = 14;
    case RAIL = 15;
    case SPLIT_RAIL = 16;
    case SURVEYED = 17;
    case WOOD = 18;
    case NONE = 19;
    case OTHER = 20;
}
