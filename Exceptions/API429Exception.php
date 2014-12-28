<?php

namespace Exceptions;

class API429Exception extends BehanceException
{
    public function __construct()
    {
        parent::__construct(
            '429 Too Many Requests error: You have exceeded your rate limit.'
        );
    }
}