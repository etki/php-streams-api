<?php

namespace Etki\Specification\Api\Stream;

/**
 * Basic and useless (abstract) stream interface.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Stream
 * @author  Etki <etki@etki.name>
 */
interface StreamInterface
{
    /**
     * Closes stream, releasing underlying resources.
     *
     * @return void
     * @since 0.1.0
     */
    public function close();

    /**
     * Tells if stream is closed. Please note that particular streams (e.g.
     * network stream) may be closed by third party at any moment.
     *
     * @return boolean
     * @since 0.1.0
     */
    public function isClosed() : bool;
}
