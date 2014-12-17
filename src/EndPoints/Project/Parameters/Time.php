<?php

namespace Behance\EndPoints\Project\Parameters;

use Eloquent\Enumeration\AbstractEnumeration;

class Time extends AbstractEnumeration
{
    const ALL = 'all';
    const TODAY = 'today';
    const WEEK = 'week';
    const MONTH = 'month';
}