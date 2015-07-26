<?php

namespace Etki\Specification\Api\Stream\Exception;

use RuntimeException as SplRuntimeException;

/**
 * Base runtime exception class.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Stream\Exception
 * @author  Etki <etki@etki.name>
 */
class RuntimeException extends SplRuntimeException implements ExceptionInterface
{
}
