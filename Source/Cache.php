<?php

class Cache implements ICache
{
    /**
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
     * @param array $product
     */
    public function saveProduct(array $product): void
    {
        // TODO: Implement save() method.
    }
}