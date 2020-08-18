<?php

class ProductController
{
    /**
     * @var IGetProduct
     */
    private $product;
    /**
     * @var IEntityLogger
     */
    private $entityLogger;


    public function __construct(IGetProduct $product, IEntityLogger $entityLogger)
    {
        $this->product = $product;
        $this->entityLogger = $entityLogger;
    }

    /**
     * @param string $id
     * @return string
     */
    public function detail(string $id): string
    {
        $this->entityLogger->log($id); //Here we track the number of requests for each product

        return json_encode($this->product->execute($id));
    }
}