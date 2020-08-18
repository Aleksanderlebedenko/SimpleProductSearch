<?php

namespace App\Source;

/**
 * Given Interface IMySQLDriver from the task.
 *
 * @package App\Source
 */
interface IMySQLDriver
{
    /**
     * @param string $id
     * @return array
     */
    public function findProduct(string $id): array;
}