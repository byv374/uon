<?php

namespace UON\Exceptions;

use ErrorException;

class UonEmptyResponseException extends ErrorException
{
    protected $message = 'Empty response returned from U-On API';
}
