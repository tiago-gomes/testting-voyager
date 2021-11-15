<?php

namespace App\Enum\Property;

Enum KitchenTypeEnum: int
{
    case VOLT_OUTLET_220 = 1;
    case BUILT_IN_BBQ_GRILL = 2;
    case COOK_TOP_ELECTRIC = 3;
    case COOK_TOP_GAS = 3;
    case COUNTER_TOP_CERAMIC = 4;
    case COUNTER_TOP_CONCRETE = 5;
    case COUNTER_TOP_FORNICA = 6;
    case COUNTER_TOP_GRANITE = 7;
    case COUNTER_TOP_LAMINATE = 8;
    case COUNTER_TOP_MARBLE = 9;
    case COUNTER_TOP_OTHER = 10;
    case COUNTER_TOP_QUARTZ = 11;
    case COUNTER_TOP_SOLID_SURFACE = 12;
    case COUNTER_TOP_STONE = 13;
    case COUNTER_TOP_SYNTHETIC = 14;
    case COUNTER_TOP_TILE = 15;
    case DISHWASHER = 16;
    case DUAL_FUEL = 17;
    case EXHAUSTED_FAN = 18;
    case FREEZER = 19;
    case GARBAGE_DISPOSAL = 20;
    case HOOD_OVER_RANGE = 21;
    case HOOKUP_GAS = 22;
    case HOOKUP_ICE_MAKER = 23;
    case ISLAND = 24;
    case ISLAND_WITH_SINK = 25;
    case MICROWAVE = 26;
    case NO_APPLIANCES = 27;
    case OVEN_BUILT_IN = 28;
    case OVEN_DOUBLE = 29;
    case OVEN_ELECTRIC = 30;
    case OVEN_GAS = 31;
    case OVEN_SELF_CLEANING = 32;
    case OVEN_RANGE = 33;
    case OVEN_RANGE_BUILT_IN = 34;
    case OVEN_RANGE_BUILT_IN_GAS = 35;
    case OVEN_RANGE_ELECTRIC = 36;
    case OVEN_RANGE_GAS = 37;
    case PANTRY = 38;
    case REFRIGERATOR = 39;
    case SKYLIGHT = 40;
    case TRASH_COMPACTOR = 41;
    case WARNING_DRAWER = 42;
    case NONE = 43;
    case OTHER = 44;
}
