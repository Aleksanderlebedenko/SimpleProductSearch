<?php

namespace App\Source;

/**
 * This class is an adapter between MySQL and our common product storage.
 *
 * @package App\Source
 */
class MySQLStorage implements IProductStorage, IMySQLDriver
{
    public const MYSQL_RESOURCE_NAME = 'mySQL';

    /**
     * Implementing of the common method getById that we are using in our app.
     *
     * @param string $id
     * @return array
     */
    public function getById(string $id): array
    {
        return $this->findProduct($id);
    }

    /**
     * Implementing IMySQLDriver method to get info from MySQL.
     * We can use additional class for this, but here it is more simple, for my opinion.
     *
     * @param string $id
     * @return array
     */
    public function findProduct(string $id): array
    {
        // TODO: Implement findProduct() method.
        return [];
    }
}