<?php

class Product implements IGetProduct
{
    /**
     * @var Cache
     */
    private $cache;

    /**
     * Product constructor.
     * @param Cache $cache
     */
    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    /**
     * @param string $id
     * @return array
     */
    public function execute(string $id): array
    {
        try {
            $product = $this->cache->getProduct($id); // Trying to get product from the cache
        } catch (CannotFindFromTheCache $e) {
            $product = ResourceFactory::createStorageInstance()->find($id);
            $this->cache->saveProduct($product);
        }
        return $product;
    }
}