<?php

namespace Behance\EndPoints\Project\SubParameters;

use Eloquent\Enumeration\AbstractEnumeration;

/**
 * Class Time
 *
 * @package Behance\EndPoints\Project\SubParameters
 * @author  Amy Chen <ac1084@scarletmail.rutgers.edu>
 */
class Time extends AbstractEnumeration
{
    const ALL = 'all';
    const TODAY = 'today';
    const WEEK = 'week';
    const MONTH = 'month';
}