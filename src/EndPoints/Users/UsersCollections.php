<?php

namespace Behance\EndPoints\Users;

class UsersCollections extends UserID
{
    public function __construct($user)
    {
        parent::__construct($user);
    }

    public function __toString()
    {
        return parent::__toString() . '/collections';
    }
}