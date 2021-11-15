<?php

namespace App\Enum\Property;

Enum ConstructionStatusTypeEnum: int
{
    case COMPLETED = 1;
    case COMPLETED_NEVER_OCCP = 2;
    case EXISTING = 3;
    case NEW_CONSTRUCTION = 4;
    case NEW_TO_BE_BUILT = 5;
    case PROPOSED = 6;
    case UNDER_CONSTRUCTION = 7;
}
