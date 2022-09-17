<?php

declare(strict_types=1);

namespace RazonYang\UnitHelper\Tests;

class Secret
{
    public function __construct(
        private string $key,
    ) {
    }

    protected function getKey(): string
    {
        return $this->key;
    }

    private function echo(mixed ...$args): mixed
    {
        return $args;
    }
}
