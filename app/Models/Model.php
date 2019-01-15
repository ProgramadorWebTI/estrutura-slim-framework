<?php

namespace App\Models;

use Interop\Container\ContainerInterface;

abstract class Model
{
    protected $;

    public function __construct(ContainerInterface $c)
    {
        $this->c = $c;
    }
}
