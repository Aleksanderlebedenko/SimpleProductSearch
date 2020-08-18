<?php


class ProductFacade implements IProductFacade
{

    public function getById($id): array
    {
        return ResourceFactory::createProductReader()->getById($id);
    }
}