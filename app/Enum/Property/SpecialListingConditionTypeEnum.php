<?php

namespace App\Enum\Property;

Enum SpecialListingConditionTypeEnum: int
{
    case AUCTION = 1;
    case HUD_OWNED = 2;
    case NOT_APPLICABLE = 3;
    case BANK_OWNED_PROPERTY_OR_REO = 4;
    case COURT_CONFIRMATION_MAY_BE_REQUIRED = 5;
    case NEW_SUBDIVISION = 6;
    case NOTICE_OF_DEFAULT = 7;
    case SHORT_SALE_OR_SUBJECT_TO_LENDER = 8;
}
