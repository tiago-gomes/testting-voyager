<?php

namespace App\Enum\Property;

Enum PossessionNoticeTypeEnum: int
{
    case COE = 1;
    case COE_30_DAYS = 2;
    case COE_3_TO_5 = 3;
    case IMMEDIATE = 4;
    case NEGOTIABLE = 5;
    case SELLER_RENT_BACK = 6;
    case TENANT_RIGHTS = 7;
    case UNIFORM_COMMERCIAL_CODE = 8;
    case UPON_COMPLETION = 9;
    case NONE = 10;
    case OTHER = 11;
}
