<?php

namespace Validator;

class BehanceClientValidator
{
    public function clientID($clientID)
    {
        if (!is_string($clientID)) {
            throw new \InvalidArgumentException(    //@TODO should I use more exact exception heirarchy
                "The clientID entered for the BehanceClient instance was not a string. \n
                You entered $clientID"
            );
        }
    }

    public function associativeArray($associativeArray)
    {
        if (!is_bool($associativeArray)) {
            throw new \InvalidArgumentException(
                "The associativeArray flag entered for the BehanceClient instance was not a boolean. \n
                You entered $associativeArray"
            );
        }
    }

    public function debug($debug)
    {
        if (!is_bool($debug)) {
            throw new \InvalidArgumentException(
                "The debug flag entered for the BehanceClient instance was not a boolean. \n
                You entered $debug"
            );
        }
    }
}