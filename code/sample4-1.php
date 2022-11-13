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

class Person2 extends Person
{
    private $sex;

    public function __construct($name, $age, $sex)
    {
        parent::__construct($name, $age);
        $this->sex = $sex;
    }

    public function getSex()
    {
        return $this->sex;
    }
}

$person_a = new Person2('suzuki', 28, 'male');
$person_a_sex = $person_a->getSex();

var_dump($person_a_sex);
