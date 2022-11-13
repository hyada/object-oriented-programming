<?php

$person_a = new Person('suzuki', 28);
$person_b = new Person('tanaka', 26);

$person_a_name = $person_a->getName();
$person_a_age = $person_a->getAge();


var_dump($person_a_name);
var_dump($person_a_age);

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
