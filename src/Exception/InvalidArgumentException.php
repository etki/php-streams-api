<?php

namespace Etki\Specification\Api\Stream\Exception;

use InvalidArgumentException as SplInvalidArgumentException;

/**
 * Base invalid argument exception class.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Stream\Exception
 * @author  Etki <etki@etki.name>
 */
class InvalidArgumentException extends SplInvalidArgumentException implements 
    ExceptionInterface
{
}
