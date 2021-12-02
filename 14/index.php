<?php

class User {
    public $lastname;
    public $firstname;
    public $age;
    public $sex;
}
$user1 = new User();
$user1->lastname = 'Jordan';
$user1->firsttname = 'Mikle';
$user1->age = 32;
$user1->sex = 'male';

$user2 = new User();
$user2->lastname = 'Valueva';
$user2->firsttname = 'Victoriya';
$user2->age = 42;
$user2->sex = 'female';

echo '1: lastname:' . $user1->lastname . ', firstname:' . $user1->firsttname . ',age:' . $user1->age  . ',sex:' . $user1->sex . "\n";
echo '2: lastname:' . $user2->lastname . ', firstname:' . $user2->firsttname . ',age:' . $user2->age  . ',sex:' . $user2->sex . "\n";
