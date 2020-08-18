<?php

namespace App\Source;

/**
 * This factory needed for getting product reader.
 *
 * @package App\Source
 */
class ResourceFactory
{
    /**
     * Here we are getting instance of the concrete storage.
     *
     * @return IProductStorage
     */
    private static function createStorageInstance(): IProductStorage
    {
        switch ($_ENV['defaultProductStorage']) { // From the test perspective, we always have this variable.
            case MySQLStorage::MYSQL_RESOURCE_NAME:
                return new MySQLStorage();
            default:
                return new ElasticSearchStorage();
        }
    }

    /**
     * Here we are getting product reader (now we have only one).
     *
     * @return IProductReader
     */
    public static function createProductReader(): IProductReader
    {
        return new ProductReader(CacheFactory::createCacheInstance(), static::createStorageInstance());
    }
}