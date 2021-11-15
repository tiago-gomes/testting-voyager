<?php

namespace App\Enum\Property;

Enum HazardDevelopmentTypeEnum: int
{
    case FIRE_ZONE = 1;
    case FLOOD_INSURANCE_REQUIRED = 2;
    case FLOOD_ZONE = 3;
    case HAZARDOUS_WASTE_AREA = 4;
    case HILLSIDE = 5;
    case LEAD_BASE_DISCLOSURE = 6;
    case NATURAL_HAZARD_DISCLOSURE = 7;
    case NHDS_REPORT = 8;
    case NONE = 8;
}
