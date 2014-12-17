<?php

namespace Behance\EndPoints;

abstract class EndPoint
{
    protected $endpoint;

    public static function createEndPoint(Endpoint $endpoint)
    {
        /**
         * if project
         *    if subproject
         */
        // some factory that creates your endpoint
    }
}