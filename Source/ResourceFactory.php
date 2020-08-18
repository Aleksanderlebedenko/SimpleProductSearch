<?php

class ResourceFactory
{
    public static function createStorageInstance(): IProductStorage
    {
        switch ($_ENV['defaultProductStorage']) { // For instance we always have this variable
            case MySQLStorage::MYSQL_RESOURCE_NAME:
                $storage = new MySQLStorage();
                break;
            default:
                $storage = new ElasticSearchStorage();
        }

        return new ProductStorage($storage);
    }
}