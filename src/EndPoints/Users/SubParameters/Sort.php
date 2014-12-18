<?php

namespace Behance\EndPoints\Users\SubParameters;

use Eloquent\Enumeration\AbstractEnumeration;

class Sort extends AbstractEnumeration
{
    const FEATURED_DATE = 'featured_date';
    const APPRECIATIONS = 'appreciations';
    const VIEWS = 'views';
    const COMMENTS = 'comments';
    const PUBLISHED_DATE = 'published_date';
    const FOLLOWED = 'followed';
}