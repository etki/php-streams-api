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
     * Retrieves attached metadata if it is available or just returns null.
     *
     * @param string $metaDataKey Key to return metadata for.
     *
     * @return mixed|null
     * @since 0.1.0
     */
    public function getMetaData(string $metaDataKey);

    /**
     * Tells if has metadata for specified key.
     *
     * @param string $metaDataKey Key to check.
     *
     * @return bool
     * @since 0.1.0
     */
    public function hasMetaData(string $metaDataKey);
}
