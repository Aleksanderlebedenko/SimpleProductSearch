<?php

namespace App\Controller;

use App\IEntityLogger;
use App\IProductFacade;

/**
 * Class ProductController
 *
 * @package App\Controller
 */
class ProductController
{
    /**
     * @var IProductFacade
     */
    private $product;
    /**
     * @var IEntityLogger
     */
    private $entityLogger;

    /**
     * ProductController constructor.
     * We need it for DI of the needed classes.
     *
     * @param IProductFacade $product
     * @param IEntityLogger $entityLogger
     */
    public function __construct(IProductFacade $product, IEntityLogger $entityLogger)
    {
        $this->product = $product;
        $this->entityLogger = $entityLogger;
    }

    /**
     * Getting details of the product.
     *
     * @param string $id
     * @return string
     */
    public function detail(string $id): string
    {
        $this->entityLogger->log($id); //Here we track the number of requests for each product

        return json_encode($this->product->getById($id));
    }
}