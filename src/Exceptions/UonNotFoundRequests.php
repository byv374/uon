<?php

namespace Uon\Exceptions;

use ErrorException;

class UonNotFoundRequests extends ErrorException
{
    protected $message = 'Not Found';
}
