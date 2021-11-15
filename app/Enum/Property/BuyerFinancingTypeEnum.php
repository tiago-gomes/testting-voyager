<?php

namespace App\Enum\Property;

Enum BuyerFinancingTypeEnum: int
{
    case ALL_CASH_NO_LOANS = 1;
    case ALL_INCLUSIVE_TRUST_DEED = 2;
    case CAL_VET_LOAD = 3;
    case CASH_TO_EXISTING_LOAN = 4;
    case CONVENTIONAL_LOAN = 5;
    case FHA_LOAN = 6;
    case NEW_CONTRACT_OF_SALE = 7;
    case PRIVATE_FINANCING = 8;
    case SELLER_FINANCING = 9;
    case VA_LOAN = 10;
    case OTHER = 11;
}
