<?php
class User {

  protected $name;
  protected $age;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

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
class student extends User {
    private $sholarship;
    private $well;
}
class Driver extends Worker {
    private $drivingexperience;
    private $categories = ['A','B','C'];
}
$Ivan = new Man();
$Ivan->name = 'Ivan';
$Ivan->age = 25;
$Ivan->salary = 1000;
$Vasya = new Man();
$Vasya->name = 'Vasya';
$Vasya->age = 26;
$Vasya->salary = 2000;

$users = [$Ivan,$Vasya];
$sum = 0;
foreach ($users as $item) {
    echo 'salary:' . $item->salary . "\n";
    $sum += $item->salary;
}
echo 'Sum:' . $sum;

