<?php

namespace App\Source;


interface IProductReader
{
    public function getById(string $id): array;

}