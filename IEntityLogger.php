<?php

namespace App;


interface IEntityLogger
{
    public function log(string $id): void;
}