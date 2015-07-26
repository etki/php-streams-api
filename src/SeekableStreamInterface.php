<?php

namespace Etki\Specification\Api\Stream;

use Etki\Specification\Api\Stream\Exception\ClosedStreamOperationException;

/**
 * Describes a stream that allows traversing.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Stream
 * @author  Etki <etki@etki.name>
 */
interface SeekableStreamInterface extends StreamInterface
{
    /**
     * Retrieves current position.
     *
     * @throws ClosedStreamOperationException
     *
     * @return int
     * @since 0.1.0
     */
    public function getPosition() : int;

    /**
     * Moves stream pointer to specified position.
     *
     * @param int $position Position to move to.
     *
     * @throws ClosedStreamOperationException
     *
     * @return void
     * @since 0.1.0
     */
    public function seek(int $position);
}
