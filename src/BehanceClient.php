<?php

namespace Behance;
use Behance\EndPoints\EndPoint;
use Exceptions\API403Exception;
use Exceptions\API404Exception;
use Exceptions\API429Exception;
use Exceptions\API500Exception;
use Exceptions\API503Exception;
use Exceptions\BehanceException;
use Httpful\Request;
use Validator\BehanceClientValidator;

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
     * @var
     */
    protected $validator;

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
        $this->validator = new BehanceClientValidator();
        $this->validator->clientID($clientID);

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
     * @param bool $debug
     *
     * @return mixed
     *
     * @throws API403Exception
     * @throws API404Exception
     * @throws API429Exception
     * @throws API500Exception
     * @throws API503Exception
     * @throws BehanceException
     * @throws \Httpful\Exception\ConnectionErrorException
     */
    public function execute($associativeArray = false, $debug = false)
    {
        echo "\n YOUR QUERY \n" . $this->__toString() . "\n END QUERY \n";

        /* --- Validation --- */
        $this->validator->associativeArray($associativeArray);
        $this->validator->debug($debug);

        /* --- Make request --- */

        $request = Request::get($this->__toString())
            ->send();

        $rawResponse = $request->raw_body;

        /* --- Convert Json to associative array --- */

        $response = json_decode($rawResponse, $associativeArray);

        /* --- Debug --- */

        $errorCode = $response->http_code;

        if ($debug === true) {
            switch ($errorCode)
            {
                case 200:       //@TODO How should I be handling success?
                    break;
                case 403:
                    throw new API403Exception();
                    break;
                case 404:
                    throw new API404Exception();
                    break;
                case 429:
                    throw new API429Exception();
                    break;
                case 500:
                    throw new API500Exception();
                    break;
                case 503:
                    throw new API503Exception();
                    break;
                default:
                    throw new BehanceException();
            }
        }

        return $response;
    }

}
