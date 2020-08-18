<?php

class ResourceFactory
{
    private static function createStorageInstance(): IProductStorage
    {
        switch ($_ENV['defaultProductStorage']) { // For instance, we always have this variable
            case MySQLStorage::MYSQL_RESOURCE_NAME:
                return new MySQLStorage();
            default:
                return new ElasticSearchStorage();
        }
    }

    public static function createProductReader(): IProductReader
    {
        return new ProductReader(CacheFactory::createCacheInstance(), static::createStorageInstance());
    }
}