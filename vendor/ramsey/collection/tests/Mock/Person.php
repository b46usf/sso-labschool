<?php

declare(strict_types=1);

namespace Ramsey\Collection\Test\Mock;

class Person
{
    public function __construct(public readonly string $name)
    {
    }
}
