<?php

namespace App\Enum\Property;

Enum CommunicationTypeEnum: int
{
    case AUDIO_VIDEO_PRE_WIRED = 1;
    case CABLE_TV= 2;
    case DSV = 3;
    case FIBER_READY = 4;
    case INTERCOM = 5;
    case NETWORKED = 6;
    case SATELLITE_DISH = 7;
    case TV_ANTENNA = 8;
    case NONE = 9;
    case OTHER = 10;
}
