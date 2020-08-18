<?php


interface IProductReader
{
    public function getById(string $id): array;

}