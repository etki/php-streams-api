<?php

namespace Etki\Specification\Api\Stream;

use Etki\Specification\Api\Stream\Exception\InvalidDataArrayContentException;

/**
 * Describes stream that has write access to it.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Stream
 * @author  Etki <etki@etki.name>
 */
interface WritableStreamInterface extends StreamInterface
{
    /**
     * Writes data to stream.
     *
     * @param int[] $data Data to write
     *
     * @throws InvalidDataArrayContentException Thrown if invalid data has been
     *                                          passed.
     *
     * @return int Bytes written.
     * @since 0.1.0
     */
    public function write(array $data) : int;
}
