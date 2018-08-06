<?php declare(strict_types=1);

namespace Mamunish\Rippled\Exception;

/**
 * An exception for parameter validation errors.
 *
 * @package Mamunish\Rippled\Exception
 */
class ResponseErrorException extends RippledException
{
    // Require a message in the constructor.
    public function __construct($message, $code = 0, RippledException $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
