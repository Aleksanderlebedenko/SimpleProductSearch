<?php


class ElasticSearchStorage implements IProductStorage, IElasticSearchDriver
{
    public const RESOURCE_NAME = 'ElasticSearch';

    public function getById(string $id): array
    {
        return $this->findById($id);
    }

    public function findById(string $id): array
    {
        // TODO: Implement findById() method.
        return [];
    }
}