<?php

namespace KenticoCloud\Delivery;

/**
 * Interface PropertyMapperInterface
 * @package KenticoCloud\Delivery
 */
interface PropertyMapperInterface
{
    public function getProperty($data, $modelType, $property);
}