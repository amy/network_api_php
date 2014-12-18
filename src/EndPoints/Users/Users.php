<?php

namespace Behance\EndPoints\Users;

use Behance\EndPoints\EndPoint;

abstract class Users extends EndPoint
{
    /**
     * String representation of Users class
     *
     * @return string
     */
    public function __toString()
    {
        return '/users';
    }
}