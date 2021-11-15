<?php

namespace App\Enum\Property;

Enum ShowingInstructionEnum: int
{
    case HOUR_24_NOTICE_REQUIRED = 1;
    case APPOINTMENT_ONLY = 2;
    case CALL_FIRST = 3;
    case CALL_LISTING_AGENT = 4;
    case CALL_MANAGER = 5;
    case CALL_OWNER = 6;
    case CALL_TENANT = 7;
    case CBS_REQUIRED = 8;
    case CBS_RESTRICTED_CALL_LA = 9;
    case DO_NOT_DISTURB_OCCUPANTS = 10;
    case DO_NOT_GO_DIRECT = 11;
    case DO_NOT_SHOW = 12;
    case GATE_CODE = 13;
    case GO_DIRECTLY = 14;
    case KEY_IN_LISTING_OFFICE = 15;
    case LA_MUST_BE_PRESENT = 16;
    case LEAVE_CARD = 17;
    case LOCK_BOX = 18;
    case LOCK_BOX_LOCATION = 19;
    case LOCK_BOX_NONE = 20;
    case LOCK_BOX_OTHER = 21;
    case LOCK_BOX_SUPRA_IBOX = 22;
    case LOCK_BOX_SUPRA_IBOX_BLUETOOTH = 23;
    case LOCK_BOX_SUPRA_IBOX_BLUETOOTH_LE = 24;
    case NO_SIGN = 25;
    case NON_DISCLOSURE_REQUIRED = 26;
    case PETS_SEE_REMARKS = 27;
    case RESTRICTED_HOURS = 28;
    case SECURITY_SYSTEM = 29;
    case SEE_REMARKS = 30;
    case SUBJECT_TO_INSPECTION = 31;
    case NONE = 32;
    case OTHER = 33;
}
