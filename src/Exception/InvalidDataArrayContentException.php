<?php

namespace Etki\Specification\Api\Stream\Exception;

/**
 * Exception specifically designed to be thrown whenever non-integer array is
 * passed to stream as data or any integer exceeds default byte size.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Stream\Exception
 * @author  Etki <etki@etki.name>
 */
class InvalidDataArrayContentException extends InvalidArgumentException
{
}
