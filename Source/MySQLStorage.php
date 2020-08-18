<?php


class MySQLStorage implements IProductStorage, IMySQLDriver
{
    public const MYSQL_RESOURCE_NAME = 'mySQL';

    /**
     * @param string $id
     * @return array
     */
    public function find(string $id): array
    {
        return $this->findProduct($id);
    }

    public function findProduct(string $id): array
    {
        // TODO: Implement findProduct() method.
        return [];
    }
}