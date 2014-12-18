<?php

namespace Behance;
use Behance\EndPoints\EndPoint;
use Httpful\Request;

/**
 * Behance Network API implementation
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
class BehanceClient
{
    const API_ROOT = 'https://www.behance.net/v2';

    /**
     * @var string $clientID
     *    The api key that you received upon registering your app.
     */
    protected $clientID;

    /**
     * @var EndPoint $endpoint
     *    The end point you want to make a request for.
     */
    protected $endpoint;

    /**
     * BehanceClient Constructor
     *
     * @param string $clientID
     *    The api key that you received upon registering your app.
     * @param EndPoint $endPoint
     *    The end point you want to make a request for.
     */
    public function __construct(
        $clientID,
        EndPoint $endPoint
    ) {
        $this->clientID = $clientID;
        $this->endpoint = $endPoint;
    }

    /**
     * String representation of BehanceClient class
     *
     * @return string
     */
    public function __toString()
    {
        return
            self::API_ROOT . '/' .
            $this->endpoint->__toString() .
            '&client_id=' . $this->clientID;
    }

    /**
     * Makes http request and returns json
     *
     * @param bool $associativeArray
     * @return mixed
     * @throws \Httpful\Exception\ConnectionErrorException
     */
    public function execute($associativeArray = false)
    {
        echo "\n YOUR QUERY \n" . $this->__toString() . "\n END QUERY \n";

        $request = Request::get($this->__toString())
            ->send();

        $rawResponse = $request->raw_body;

        $response = json_decode($rawResponse, $associativeArray);

        /**
         * $response->http_code (the number of the error code)
         */

        //var_dump($request);
        return $response;
    }

}
