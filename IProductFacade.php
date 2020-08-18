<?php

namespace App;


/**
 * Interface IProductFacade needed for getting product by id.
 * @package App
 */
interface IProductFacade
{
    /**
     * Get product by id.
     *
     * @param string $id
     * @return array
     */
    public function getById($id): array;
}