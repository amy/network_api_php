<?php

namespace Behance\EndPoints\Project\Parameters;

use Eloquent\Enumeration\AbstractEnumeration;

/**
 * Class Sort
 *
 * @package Behance\EndPoints\Project\Parameters
 * @author  Amy Chen <ac1084@scarletmail.rutgers.edu>
 */
class Sort extends AbstractEnumeration
{
    const FEATURED_DATE = 'featured_date';
    const APPRECIATIONS = 'appreciations';
    const VIEWS = 'views';
    const COMMENTS = 'comments';
    const PUBLISHED_DATE = 'published_date';
}