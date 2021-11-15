<?php

namespace App\Enum\Property;

Enum HoaDocsTypeEnum: int
{
    case ARTICLE_OF_INCORPORATION = 1;
    case PRE_APPROVED_REQUEST = 2;
    case BUDGET = 3;
    case BYLAWS = 4;
    case CC_AND_RS = 5;
    case FINANCIAL_STATEMENT = 6;
    case MINUTES = 7;
    case NO_DOCS_AVAILABLE = 8;
    case RESERVE_STUDY = 9;
    case RULES_AND_REGULATIONS = 10;
    case OTHER = 11;
}
