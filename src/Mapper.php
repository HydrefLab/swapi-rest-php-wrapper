<?php

namespace HydrefLab\SWAPI;

use ReflectionClass;

class Mapper
{
    /**
     * @param object $data
     * @param string|object $className
     * @return object
     */
    public function map($data, $className)
    {
        if (true === is_object($className)) {
            $className = get_class($className);
        }

        $rc = new ReflectionClass($className);

        // @TODO: iterate on object properties and assign data
        // @TODO: map snake_case data to camelCase properties
        // @TODO: use shallow/deep mapping?
        // @TODO: recursive

        return $rc->newInstanceWithoutConstructor();
    }
}