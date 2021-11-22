<?php

namespace App\Enum\Property;


Enum AcceptableFinancialTermsTypeEnum: int
{
    case All_INCLUSIVE_TRUST_DEED = 1;
    case ASSUMABLE = 2;
    case ASSUMABLE_BY_QUALIFIED_VET = 3;
    case BUYERS_FINANCIAL_STATEMENT_REQUIRED = 4;
    case CAL_VET_LOAN = 5;
    case CASH_OR_CONVENTIONAL_LOAN = 6;
    case CONTRACT_SIDE = 7;
    case CONVENTIONAL_2ND = 8;
    case CONVENTIONAL_3RD = 9;
    case FHA = 10;
    case LEASE_OPTION = 11;
    case NEW_TERMS = 12;
    case REPLACE_TRUST_FUND = 13;
    case SELLER_MAY_CARRY_1ST = 14;
    case SELLER_MAY_CARRY_2ST = 15;
    case SELLER_MAY_PAY_CLOSING_COSTS = 16;
    case SELLER_MAY_PAY_POINTS = 17;
    case SELLER_MAY_SHARE_EQUITY = 18;
    case SELLER_MAY_CARRY = 19;
    case TRADE_POSSIBLE = 20;
    case USDA = 21;
    case VA_LOAD = 22;
    case NONE = 23;
    case OTHER = 24;
}
