<?php

namespace Etki\Specification\Api\Stream;

/**
 * This interface describes stream that supports meta data handling.
 *
 * @version 0.1.0
 * @since   0.1.0
 * @package Etki\Specification\Api\Stream
 * @author  Etki <etki@etki.name>
 */
interface MetaDataSupportingStream extends StreamInterface
{
    /**
     * Retrieves attached metadata if it is available or just returns null.
     *
     * @param string $metaDataKey Key to return metadata for.
     *
     * @return mixed|null
     * @since 0.1.0
     */
    public function getMetaData(string $metaDataKey) : bool;

    /**
     * Tells if has metadata for specified key.
     *
     * @param string $metaDataKey Key to check.
     *
     * @return bool
     * @since 0.1.0
     */
    public function hasMetaData(string $metaDataKey) : bool;
}
