<?php

interface IGetProduct
{
    /**
     * @param string $id
     * @return array
     */
    public function execute(string $id): array;
}