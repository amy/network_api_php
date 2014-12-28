<?php

namespace Exceptions;

class BehanceException extends \Exception
{
    public function __construct($message = null)
    {
        $exception = '';

        if ($message === null) {
            $exception = 'Unknown Behance API exception';
        } else {
            $exception = $message;
        }

        parent::__construct($exception);
    }

    public function __toString() {
        return $this->message;
    }
}
