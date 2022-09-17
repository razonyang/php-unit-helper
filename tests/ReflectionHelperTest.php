<?php

declare(strict_types=1);

namespace RazonYang\UnitHelper\Tests;

use PHPUnit\Framework\TestCase;
use RazonYang\UnitHelper\ReflectionHelper;

class ReflectionHelperTest extends TestCase
{
    public function keyProvider(): array
    {
        return [
            ['foo'],
            ['bar'],
        ];
    }

    /**
     * @dataProvider keyProvider
     */
    public function testInvokeMethod(string $key): void
    {
        $secret = new Secret($key);
        $actual = ReflectionHelper::invokeMethod($secret, 'getKey');

        $this->assertSame($key, $actual);
    }

    public function argsProvider(): array
    {
        return [
            [1, 2, 3],
        ];
    }

    /**
     * @dataProvider argsProvider
     */
    public function testInvokeMethodWithArgs(mixed ...$args): void
    {
        $secret = new Secret('');
        $actual = ReflectionHelper::invokeMethod($secret, 'echo', ...$args);

        $this->assertSame($args, $actual);
    }

    /**
     * @dataProvider keyProvider
     */
    public function testGetPropertyValue(string $key): void
    {
        $secret = new Secret($key);
        $actual = ReflectionHelper::getPropertyValue($secret, 'key');

        $this->assertSame($key, $actual);
    }

    /**
     * @dataProvider keyProvider
     */
    public function testSetPropertyValue(string $key): void
    {
        $secret = new Secret('');
        ReflectionHelper::setPropertyValue($secret, 'key', $key);

        $this->assertSame($key, ReflectionHelper::getPropertyValue($secret, 'key'));
    }
}
