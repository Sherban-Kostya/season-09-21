<?php
class User {
    protected $name;
    protected $age;
    public $setName;
    public $getName;
    public $setAge;
    public $getAge;
}
class Worker extends User {
    private $salary;
    public $getSalary;
    public $setSalary;
}

class Salary extends User{
    protected $salary;
}

class Man extends User {
    public $name;
    public $age;
    public $salary;
}
$Ivan = new Man();
$Ivan->name = 'Ivan';
$Ivan->age = 25;
$Ivan->Salary = 1000;
$Vasya = new Man();
$Vasya->name = 'Vasya';
$Vasya->age = 26;
$Vasya->salary = 2000;
echo 'name:' . $Ivan->name . ',age:' . $Ivan->age  . ',salary:' . $Ivan->salary . "\n";
echo 'name:' . $Vasya->name . ',age:' . $Vasya->age  . ',salary:' . $Vasya->salary . "\n";



