<?php

namespace Behance\EndPoints\Collections;

use Behance\EndPoints\EndPoint;

abstract class Collections extends EndPoint
{
    public function __toString()
    {
        return '/collections';
    }
}