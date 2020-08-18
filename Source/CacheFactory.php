<?php

class CacheFactory
{
    public static function createCacheInstance(): ICache
    {
        return new Cache();
    }
}