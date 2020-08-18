<?php

namespace App\Source;


use App\Exceptions\CannotFindFromTheCache;

/**
 * Class ProductReader needed for Cache-Aside.
 * @package App\Source
 */
class ProductReader implements IProductReader
{
    /**
     * @var ICache
     */
    private $cache;
    /**
     * @var IProductStorage
     */
    private $storage;

    /**
     * ProductReader constructor.
     * @param ICache $cache
     * @param IProductStorage $storage
     */
    public function __construct(ICache $cache, IProductStorage $storage)
    {
        $this->cache = $cache;
        $this->storage = $storage;
    }

    /**
     * Here we get info from the cache, if it not exists,
     * get it from the storage and then save result to the cache.
     *
     * @param string $id
     * @return array
     */
    public function getById(string $id): array
    {
        try {
            return $this->cache->getProduct($id);
        } catch (CannotFindFromTheCache $e) {
            $product = $this->storage->getById($id);
            $this->cache->saveProduct($product);
        }

        return $product;
    }
}