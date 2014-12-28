<?php

namespace Exceptions;

class API500Exception extends  BehanceException
{
    public function __construct()
    {
        parent::__construct(
            "500 Internal Server error: Something went wrong! Please file a ticket so we can investigate the problem. \n
            https://help.behance.net/anonymous_requests/new"
        );
    }
}