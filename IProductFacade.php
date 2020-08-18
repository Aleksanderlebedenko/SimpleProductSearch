<?php

interface IProductFacade
{
    /**
     * @param string $id
     * @return array
     */
    public function getById($id): array;
}