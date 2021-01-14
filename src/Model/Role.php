<?php

namespace src\Model;

/** Modeling the role of admiral */
class Role
{
    public const ADMIRAL = 'admiral';

    private $name;

    private function __construct(string $name)
    {
        $this->name = $name;
    }

    /**This static function is out of the object scope. I can call it without Instanciate a new object of class Role */
    public static function admiral(): self
    {
        return new self(self::ADMIRAL);
    }
}