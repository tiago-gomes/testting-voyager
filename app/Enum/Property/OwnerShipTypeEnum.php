<?php

namespace App\Enum\Property;

Enum OwnerShipTypeEnum: int
{
    case COMMON_INTEREST_DEVELOPMENT = 1;
    case CONDOMINIUM_OWNERSHIP = 2;
    case CORPORATIVE_HOUSING = 3;
    case CORPORATION = 4;
    case CORPORATION_SUBCHAPTER_5 = 5;
    case INDIVIDUAL = 6;
    case PLANNED_UNIT_DEVELOPMENT = 7;
    case STOCK_CORPORATIVE = 8;
    case TENANT = 8;
    case TRUST = 9;
}
