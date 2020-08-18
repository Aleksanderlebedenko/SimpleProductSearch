<?php

namespace App;

use App\Source\ResourceFactory;


/**
 * This is facade which allows us to get the product.
 *
 * @package App
 */
class ProductFacade implements IProductFacade
{
    /**
     * Get product by id.
     *
     * @param string $id
     * @return array
     */
    public function getById($id): array
    {
        return ResourceFactory::createProductReader()->getById($id);
    }
}