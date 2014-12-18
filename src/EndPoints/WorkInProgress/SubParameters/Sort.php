<?php

namespace Behance\EndPoints\WorkInProgress\SubParameters;

use Eloquent\Enumeration\AbstractEnumeration;

class Sort extends AbstractEnumeration
{
    const COMMENTS = 'comments';
    const VIEWS = 'views';
    const LAST_ITEM_ADDED_DATE = 'last_item_added_date';
}