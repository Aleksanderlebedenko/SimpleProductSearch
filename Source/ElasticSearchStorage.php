<?php

namespace App\Source;

/**
 * This class is an adapter between ElasticSearch and our common product storage.
 *
 * @package App\Source
 */
class ElasticSearchStorage implements IProductStorage, IElasticSearchDriver
{
    public const RESOURCE_NAME = 'ElasticSearch'; // This is needed for possible using in the factory.

    /**
     * Implementing of the common method getById that we are using in our app.
     *
     * @param string $id
     * @return array
     */
    public function getById(string $id): array
    {
        return $this->findById($id);
    }

    /**
     * Implementing IElasticSearchDriver method to get info from ElasticSearch.
     * We can use additional class for this, but here it is more simple, for my opinion.
     *
     * @param string $id
     * @return array
     */
    public function findById(string $id): array
    {
        // TODO: Implement findById() method.
        return [];
    }
}