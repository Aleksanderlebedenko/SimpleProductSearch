<?php

namespace App\Source;

/**
 * This class needed for choosing what exactly type of cache we will use.
 * For now we have only one class.
 *
 * @package App\Source
 */
class CacheFactory
{
    /**
     * Cache factory.
     * For now we have only one class.
     *
     * @return ICache
     */
    public static function createCacheInstance(): ICache
    {
        return new Cache();
    }
}