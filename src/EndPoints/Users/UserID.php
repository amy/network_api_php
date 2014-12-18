<?php

namespace Behance\EndPoints\Users;

abstract class UserID extends Users
{
    protected $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function __toString()
    {
        return parent::__toString() . '/' . $this->userId;
    }
}