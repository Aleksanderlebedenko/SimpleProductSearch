<?php

interface IProductStorage
{
    /**
     * @param string $id
     * @return array
     */
    public function find(string $id): array;
}