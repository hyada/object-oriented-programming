<?php

class Person
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Person3 extends Person
{
    private static $number = 0;

    public function __construct($name, $age)
    {
        parent::__construct($name, $age);
        ++self::$number;
    }

    public static function getNumber()
    {
        return self::$number;
    }
}

$person_a = new Person3('suzuki', 28);
$person_b = new Person3('tanaka', 26);

$person_number = Person3::getNumber();

var_dump($person_number);
