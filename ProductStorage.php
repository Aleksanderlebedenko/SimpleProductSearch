<?php


class ProductStorage implements IProductStorage
{

    /**
     * @var IProductStorage
     */
    private $storage;

    public function __construct(IProductStorage $storage)
    {
        $this->storage = $storage;
    }

    public function find(string $id): array
    {
        return $this->storage->find($id);
    }
}