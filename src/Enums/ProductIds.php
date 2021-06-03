<?php


namespace Sparav\CustomerLicense\Enums;

use BenSampo\Enum\Enum;

final class ProductIds extends Enum
{
    const Yearly = 0;
    const Monthly = 1;
    const Weekly = 2;
    const SevenDaysTrial = 3;
    const ThreeDaysTrial = 4;
}
