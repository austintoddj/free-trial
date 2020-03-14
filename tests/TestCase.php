<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use ReflectionClass;
use ReflectionException;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Call the protected or private methods of a class.
     *
     * @param $object
     * @param string $method
     * @param array $parameters
     * @return mixed
     * @throws ReflectionException
     */
    protected function invokeMethod(&$object, string $method, array $parameters = [])
    {
        $reflection = new ReflectionClass(get_class($object));

        $method = $reflection->getMethod($method);

        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }
}
