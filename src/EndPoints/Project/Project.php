<?php

namespace Behance\EndPoints\Project;

use Behance\EndPoints\EndPoint;

/**
 * Class Project
 *
 * @package Behance\EndPoints\Project
 * @author  Amy Chen <ac1084@scarletmail.rutgers.edu>
 */
abstract class Project extends EndPoint
{
    /**
     * String representation of Project class
     *
     * @return string
     */
    public function __toString()
    {
        return '/projects';
    }
}