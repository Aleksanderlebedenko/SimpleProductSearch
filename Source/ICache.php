<?php

namespace App\Source;


interface ICache
{
    public function getProduct(string $id): array;

    public function saveProduct(array $product): void;
}