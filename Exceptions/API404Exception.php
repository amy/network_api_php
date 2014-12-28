<?php

namespace Exceptions;

class API404Exception extends BehanceException
{
    public function __construct()
    {
        parent::__construct(
            "404 Not Found error: You have made a request to an endpoint that does not exist, \n
            or you are requesting a specific thing that does not exist (such as a user)."
        );
    }
}