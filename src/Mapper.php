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

    /**
     * Method copied from https://github.com/sebastianbergmann/phpunit/blob/master/src/Util/Test.php
     *
     * @param string $docBlock
     * @return array
     */
    protected function parseAnnotations(string $docBlock): array
    {
        $annotations = [];

        // Strip away the docblock header and footer to ease parsing of one line annotations
        $docBlock = substr($docBlock, 3, -2);

        if (preg_match_all('/@(?P<name>[A-Za-z_-]+)(?:[ \t]+(?P<value>.*?))?[ \t]*\r?$/m', $docBlock, $matches)) {
            $numMatches = count($matches[0]);

            for ($i = 0; $i < $numMatches; ++$i) {
                $annotations[$matches['name'][$i]][] = (string) $matches['value'][$i];
            }
        }

        return $annotations;
    }
}