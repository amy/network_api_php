<?php

namespace Behance\EndPoints\Project;

use Behance\EndPoints\EndPoint;

abstract class Project extends EndPoint
{
    public function __toString()
    {
        return '/projects';
    }
}