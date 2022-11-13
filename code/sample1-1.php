<?php

$person_a = ['name' => 'suzuki', 'age' => 28];
$person_b = ['name' => 'tanaka', 'age' => 26];

$person_a_name = getName($person_a);
$person_a_age = getAge($person_a);

function getName($person)
{
    return $person['name'];
}

function getAge($person)
{
    return $person['age'];
}
