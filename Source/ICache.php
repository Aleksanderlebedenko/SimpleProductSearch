<?php

namespace App\Source;

/**
 * Interface for caching of the products.
 *
 * @package App\Source
 */
interface ICache
{
    /**
     * @param string $id
     * @return array
     */
    public function getProduct(string $id): array;

    /**
     * @param array $product
     */
    public function saveProduct(array $product): void;
}