<?php

namespace Exceptions;

class API403Exception extends BehanceException
{
    public function __construct()
    {
        parent::__construct(
            '403 Forbidden error: API key is invalid.'
        );
    }
}