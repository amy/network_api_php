<?php

namespace Behance\EndPoints\WorkInProgress;

use Behance\EndPoints\EndPoint;

abstract class Wips extends EndPoint
{
    public function __toString()
    {
        return '/wips';
    }
}