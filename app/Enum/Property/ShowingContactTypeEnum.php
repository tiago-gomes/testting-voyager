<?php

namespace App\Enum\Property;

Enum ShowingContactTypeEnum: int
{
    case CALL_AGENT = 1;
    case MANAGER = 2;
    case OWNER = 3;
    case TENANT = 4;
    case VACANT = 5;
}
