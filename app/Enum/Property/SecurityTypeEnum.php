<?php

namespace App\Enum\Property;

Enum SecurityTypeEnum: int
{
    case CLOSED_CIRCUIT_MONITORING = 1;
    case CONTROLLED_SECURED_ACCESS = 2;
    case FIRE_ALARM = 3;
    case FIRE_ESCAPE = 4;
    case FIRE_SYSTEM_SPRINKLER = 5;
    case FIRE_SYSTEM_SUPPRESSION = 6;
    case PANIC_ALARM = 7;
    case SECURED_GARAGE_OR_PARKING = 8;
    case SECURITY_ALARM = 9;
    case SECURITY_BUILDING = 10;
    case SECURITY_FENCE = 11;
    case SECURITY_GUARD = 12;
    case SECURITY_LIGHTS = 13;
    case SECURITY_SERVICE = 14;
    case VAULT = 15;
    case VIDEO_OR_AUDIO_SYSTEM = 16;
    case WINDOW_BARS = 17;
    case WINDOW_BARS_WITH_QUICK_RELEASER = 18;
    case NONE = 19;
}
