<?php

namespace App\Source;

/**
 * Given Interface IElasticSearchDriver from the task.
 *
 * @package App\Source
 */
interface IElasticSearchDriver
{
    /**
     * @param string $id
     * @return array
     */
    public function findById(string $id): array;
}