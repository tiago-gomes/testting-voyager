<?php

namespace App\Enum\Property;

Enum CommunityRestrictionsTypeEnum: int
{
    case AGE = 1;
    case BOARD_APPROVAL= 2;
    case FAMILY_PARK = 3;
    case GUEST_RESTRICTIONS = 4;
    case HEIGHT_RESTRICTIONS = 5;
    case HOA_RENTAL = 6;
    case NEIGHBORHOOD_APPROVAL = 7;
    case NO_WATERBEDS = 8;
    case PARKING_RESTRICTIONS = 9;
    case PETS_ALLOWED = 10;
    case PETS_CATS_PERMITTED= 11;
    case PETS_NOT_ALLOWED = 12;
    case PETS_NUMBER_RESTRICTIONS = 13;
    case PETS_OTHER = 14;
    case PETS_RESTRICTIONS = 15;
    case PETS_RULES = 16;
    case RETIREMENT_COMMUNITY = 17;
    case SENIOR_COMMUNITY = 18;
    case SENIOR_COMMUNITY_1_RESIDENT_BIGGER_THEN_55 = 19;
    case SENIOR_COMMUNITY_BIGGER_THEN_55 = 20;
    case SENIOR_COMMUNITY_BIGGER_THEN_62 = 21;
    case SENIOR_COMMUNITY_BIGGER_THEN_65 = 22;
    case NONE = 23;
    case OTHER = 24;
}
