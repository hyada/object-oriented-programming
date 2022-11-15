<?php

class Person
{
    protected static $age = 26;

    public static function getAge()
    {
        return static::$age;
    }
}

class Person2 extends Person
{
    protected static $age = 28;
}

$person_age = Person::getAge();
$person2_age = Person2::getAge();

var_dump($person_age);
var_dump($person2_age);
