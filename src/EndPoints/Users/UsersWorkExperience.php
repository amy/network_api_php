<?php

namespace Behance\EndPoints\Users;

class UsersWorkExperience extends UserID
{
    public function __construct($user)
    {
        parent::__construct($user);
    }

    public function __toString()
    {
        return parent::__toString() . '/work_experience';
    }
}