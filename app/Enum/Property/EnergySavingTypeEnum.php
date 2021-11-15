<?php

namespace App\Enum\Property;

Enum EnergySavingTypeEnum: int
{
    case ATTIC_FAN = 1;
    case CEILING_INSULATION = 2;
    case CHEMICAL_FREE_INSULATION = 3;
    case DOUBLE_PANE_WINDOWS = 4;
    case ENERGY_STAR_APPLIANCES = 5;
    case ENERGY_STAR_HVAC = 6;
    case ENERGY_STAR_LIGHTNING = 7;
    case GEOTHERMAL_ENERGY_SOURCE = 8;
    case GREEN_FEATURES = 9;
    case INSULATION_FLOOR = 10;
    case INSULATION_PER_OWNER = 11;
    case INSULATION_UNKNOWN = 12;
    case LOW_FLOW_SHOWER = 13;
    case LOW_FLOW_TOILET = 14;
    case PASSIVE_SOLAR = 15;
    case SEALED_CRAWLSPACE = 16;
    case SKYLIGHT = 17;
    case SMART_HOME_SYSTEM = 18;
    case SMART_VENT_FOUNDATION = 19;
    case SMART_VENT_ROOF = 20;
    case SOLAR_HEATING = 21;
    case SOLAR_HEATING_POOL = 22;
    case SOLAR_POWER = 23;
    case SOLAR_POWER_BATTERY_BACKUP = 24;
    case SOLAR_POWER_OFF_GRID = 25;
    case SOLAR_POWER_ON_GRID = 26;
    case SOLAR_SCREENS = 27;
    case STORM_DOORS = 28;
    case THANKLESS_WATER_HEATER = 29;
    case THERMOSTAT_PANE_WINDOWS = 30;
    case TRIPLE_PANE_WINDOWS = 31;
    case WALLS_INSULATED = 32;
    case WHOLE_HOUSE_FAN = 33;
    case NONE = 34;
    case OTHER = 35;
}
