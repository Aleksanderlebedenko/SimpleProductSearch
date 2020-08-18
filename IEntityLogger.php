<?php

namespace App;

/**
 * Interface IEntityLogger needed for logging something.
 *
 * @package App
 */
interface IEntityLogger
{
    /**
     * @param string $id
     */
    public function log(string $id): void;
}