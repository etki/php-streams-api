<?php

namespace Etki\Specification\Api\Stream;

use Etki\Specification\Api\Stream\Exception\ClosedStreamOperationException;

/**
 * Interface for readable stream.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Stream
 * @author  Etki <etki@etki.name>
 */
interface ReadableStreamInterface extends StreamInterface
{
    /**
     * Reads `$length` bytes from stream.
     *
     * @param int $length Amount of bytes to read.
     *
     * @throws ClosedStreamOperationException
     *
     * @return int[] Read bytes.
     * @since 0.1.0
     */
    public function read(int $length) : array;
}
