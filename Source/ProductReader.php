<?php

namespace App\Source;


use App\Exceptions\CannotFindFromTheCache;

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

    public function __construct(ICache $cache, IProductStorage $storage)
    {
        $this->cache = $cache;
        $this->storage = $storage;
    }

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