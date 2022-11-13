<?php

class Person
{
    protected static $number = 0;

    public static function getNumber()
    {
        return self::$number;
    }
}

class Person2 extends Person
{
    protected static $number = 1;
}

var_dump(Person::getNumber());
var_dump(Person2::getNumber());
