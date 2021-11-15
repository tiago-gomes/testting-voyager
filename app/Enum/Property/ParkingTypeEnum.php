<?php

namespace App\Enum\Property;

Enum ParkingTypeEnum: int
{
    case ASSIGNED_SPACES = 1;
    case ATTACHED_GARAGE = 2;
    case BOAT_DOCK = 3;
    case CARPORT = 4;
    case COMMON_PARKING_AREA = 5;
    case COVERED_PARKING = 6;
    case DETACHED_GARAGE = 7;
    case GOVERNMENT_LAND_ACCESS = 8;
    case HAY_STORAGE = 9;
    case HOT_WALKER = 10;
    case PADDOCKS = 11;
    case PALPATION_CHUTE = 12;
    case PASTURE = 13;
    case PASTURE_IRRIGATED = 14;
    case POLE_BARN = 15;
    case RIDING_TRAILS = 16;
    case ROUND_PEN = 17;
    case SHAVING_BIN = 18;
    case STALLS = 19;
    case TRAILER_STORAGE = 20;
    case UNIMPROVED = 21;
    case WASH_RACK = 22;
    case OTHER = 23;
}
