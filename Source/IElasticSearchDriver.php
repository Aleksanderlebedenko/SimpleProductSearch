<?php

interface IElasticSearchDriver
{
    /**
     * @param string $id
     * @return array
     */
    public function findById(string $id): array;
}