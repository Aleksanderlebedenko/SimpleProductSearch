<?php

namespace App\Source;


use App\Exceptions\CannotFindFromTheCache;

/**
 * Class for caching of the products.
 * As part of a test task, I've decided to not create an exact implementation.
 *
 * @package App\Source
 */
class Cache implements ICache
{
    /**
     * Get product from the cache.
     *
     * @param string $id
     * @return array
     * @throws CannotFindFromTheCache
     */
    public function getProduct(string $id): array
    {
        // TODO: Implement get() method and return array if it exists

        throw new CannotFindFromTheCache("Can't find product in cache.");
    }

    /**
     * Save product to the cache.
     *
     * @param array $product
     */
    public function saveProduct(array $product): void
    {
        // TODO: Implement save() method.
    }
}