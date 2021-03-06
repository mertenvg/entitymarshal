<?php

namespace Entity\Definition\Abstraction;

/**
 * Interface PropertyDefnitionInterface
 *
 * @author    Merten van Gerven
 * @copyright (c) 2013, Merten van Gerven
 */
interface PropertyDefinitionInterface
{
    /**
     * @return  string
     */
    public function getName();

    /**
     * @param   string $name
     *
     * @return  \Entity\Definition\PropertyDefinition
     */
    public function setName($name);

    /**
     * @return  string
     */
    public function getRawType();

    /**
     * @param   string $rawType
     *
     * @return  \Entity\Definition\PropertyDefinition
     */
    public function setRawType($rawType);

    /**
     * @return  string
     */
    public function getType();

    /**
     * @param   string $type
     *
     * @return  \Entity\Definition\PropertyDefinition
     */
    public function setType($type);

    /**
     * @return  string
     */
    public function getGenericType();

    /**
     * @param   string $generic
     *
     * @return  \Entity\Definition\PropertyDefinition
     */
    public function setGenericType($genericType);

    /**
     * @return  boolean
     */
    public function isGeneric();
}
