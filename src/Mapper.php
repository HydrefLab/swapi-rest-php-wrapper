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
        $object = $rc->newInstanceWithoutConstructor();

        foreach ($data as $key => $value) {
            $propertyName = lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $key))));

            if (true === $rc->hasProperty($propertyName)) {
                $property = $rc->getProperty($propertyName);
                $property->setValue($object, $value);
            }
        }

        // @TODO: parse props annotations and cast value
        // @TODO: use shallow/deep mapping?
        // @TODO: recursive

        return $object;
    }
}