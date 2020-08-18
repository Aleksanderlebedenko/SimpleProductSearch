<?php

interface IProductStorage
{
    /**
     * @param string $id
     * @return array
     */
    public function getById(string $id): array;
}