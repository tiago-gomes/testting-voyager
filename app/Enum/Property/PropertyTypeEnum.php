<?php

namespace App\Enum\Property;

Enum PropertyTypeEnum: int
{
    case SINGLE_FAMILY_HOME_DETACHED = 1;
    case SINGLE_FAMILY_HOME_ATTACHED = 2;
    case CONDOMINIUM = 3;
    case FARM = 4;
    case TOWNHOUSE = 5;
    case FLOATING_HOME = 6;
    case OTHER_RESIDENTIAL = 7;
}
