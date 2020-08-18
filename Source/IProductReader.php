<?php

namespace App\Source;

/**
 * Interface IProductReader for reading product.
 *
 * @package App\Source
 */
interface IProductReader
{
    /**
     * @param string $id
     * @return array
     */
    public function getById(string $id): array;

}