<?php

declare(strict_types=1);

namespace RazonYang\UnitHelper;

use ReflectionClass;

final class ReflectionHelper
{
    public static function invokeMethod(mixed $obj, string $name, mixed ...$args): mixed
    {
        $class = new ReflectionClass($obj);

        $method = $class->getMethod($name);
        $method->setAccessible(true);

        return $method->invokeArgs($obj, $args);
    }

    public static function getPropertyValue(mixed $obj, string $name): mixed
    {
        $class = new ReflectionClass($obj);

        $property = $class->getProperty($name);
        $property->setAccessible(true);

        return $property->getValue($obj);
    }

    public static function setPropertyValue(mixed $obj, string $name, mixed $value)
    {
        $class = new ReflectionClass($obj);

        $property = $class->getProperty($name);
        $property->setAccessible(true);

        $property->setValue($obj, $value);
    }
}
