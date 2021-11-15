<?php

namespace App\Enum\Property;

Enum FoundationTypeEnum: int
{
    case BRICK = 1;
    case BRICK_MORTAR_PERIMETER = 2;
    case CAPPED_BRICK = 3;
    case COMBINATION = 4;
    case CONCRETE_BLOCK = 5;
    case CONCRETE_GRID = 6;
    case CONCRETE_PERIMETER = 7;
    case CONCRETE_PERIMETER_AND_SLAB = 8;
    case CONCRETE_SLAB = 9;
    case CRAWL_SPACE = 10;
    case FOUNDATION_MOISTURE_BARRIER = 11;
    case FOUNDATION_PILLARS = 12;
    case MASONRY_PERIMETER = 13;
    case MUDSILL = 14;
    case NOT_PERMANENT = 15;
    case PERMANENT = 16;
    case PILLING = 17;
    case PILLARS_POSTS_PIERS = 18;
    case POST_AND_BEAM = 19;
    case QUACK_BRACING = 20;
    case RAISED = 21;
    case REINFORCED_CONCRETE = 22;
    case SEALED_CRAWLSPACE = 23;
    case STEEL_FRAME = 24;
    case UN_REINFORCED_MASONRY = 25;
    case WOOD_FRAME = 26;
    case NONE = 27;
    case OTHER = 28;
}
