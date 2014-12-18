<?php
/**
 * Created by PhpStorm.
 * User: amy
 * Date: 12/18/14
 * Time: 3:34 AM
 */

namespace Behance\EndPoints\Users;


class UsersWips extends UserID
{
    public function __construct($user)
    {
        parent::__construct($user);
    }

    public function __toString()
    {
        return parent::__toString() . '/wips';
    }
}