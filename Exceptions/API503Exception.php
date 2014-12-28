<?php

namespace Exceptions;

class API503Exception extends BehanceException
{
    public function __construct()
    {
        parent::__construct(
            "503 Service Unavailable error: Behance is up, but overloaded with requests. Try again later."
        );
    }
}