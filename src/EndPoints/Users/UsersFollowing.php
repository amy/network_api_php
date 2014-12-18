<?php

namespace Behance\EndPoints\Users;

class UsersFollowing extends UserID
{
    public function __construct($user)
    {
        parent::__construct($user);
    }

    public function __toString()
    {
        return
            parent::__toString() .
            '/' .
            $this->userId .
            '/following';
    }
}