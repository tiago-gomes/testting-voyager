<?php

namespace App\Enum\Property;

Enum AccessibilityTypeEnum: int
{
    case BATHROOM_FEATURES = 1;
    case ELEVATOR = 2;
    case FLASHING_DOORBELL = 3;
    case FLASHING_WARNINGS = 4;
    case GRAB_BARS = 5;
    case KITCHEN_FEATURES = 6;
    case LOWER_LIGHT_SWITCH = 7;
    case PARKING = 8;
    case WHEELCHAIR_ACCESS = 9;
    case WIDE_HALLS = 10;
    case NONE = 11;
    case OTHER = 12;
}
