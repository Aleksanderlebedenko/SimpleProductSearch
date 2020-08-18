<?php

namespace App\Source;

/**
 * Interface IProductStorage for reading product from any storage.
 * @package App\Source
 */
interface IProductStorage
{
    /**
     * @param string $id
     * @return array
     */
    public function getById(string $id): array; // Here is better to use dto.
}