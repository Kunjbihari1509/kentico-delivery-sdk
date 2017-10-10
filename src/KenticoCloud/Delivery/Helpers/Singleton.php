<?php

namespace KenticoCloud\Delivery\Helpers;

abstract class Singleton
{
    /**
     * Singleton constructor.
     */
    protected function __construct()
    {
    }

    final public static function getInstance()
    {
        static $aoInstance = array();

        $calledClassName = get_called_class();

        if (!isset($aoInstance[$calledClassName]))
        {
            $aoInstance[$calledClassName] = new $calledClassName();
        }

        return $aoInstance[$calledClassName];
    }

    final private function __clone()
    {
    }
}
