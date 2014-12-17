<?php

namespace Behance;
use Behance\EndPoints\EndPoint;

/**
 * Basic Behance Network API implementation to
 * accessing Users, Project and Works in Progress data
 *
 * Register your application FIRST: http://be.net/dev
 *
 * @author   Bryan Latten  <bryan@behance.com>
 * @author   Michael Klein <michael.klein@behance.com>
 * @author   Mark Dunphy <dunphy@adobe.com>
 * @author   Amy Chen <ac1084@scarletmail.rutgers.edu>
 * @link     http://be.net/dev
 *
 */
abstract class BehanceClient extends \ArrayObject
{
    const API_ROOT = 'https://www.behance.net/v2';

    protected $request;

    public function __construct(
        $client_ID,
        EndPoint $endPoint
    ) {
        $this->request = array(
            'endpoint'  => $endPoint,
            'client ID' => $client_ID
        );

        parent::__construct($this->request);
    }

    public function __toString()
    {
        return
            self::API_ROOT . '/' .
            $this['endpoint']->__toString() .
            '&client_id=' . $this['client ID'];
    }

} // Client
