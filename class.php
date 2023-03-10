<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Person{
    public string $name = "Club";
    private int $age;
    protected string $message;

    public function __construct($name)
    {
        echo 'GDSC Session',"<br>";
        $this->name = $name;
    }

    public function getter(){
        return $this->name;
    }

    public function __destruct(){
        echo "($this->name) - Destruct ";
    }
};

$person = new Person("Shacker");
echo "###########", "<br>";
echo $person->getter(),"<br>";
echo "###########", "<br>";

#inheritance
class Student extends Person{
    public string $adam;

    public function __construct($name, $adam)
    {
        $this->adam = $adam;
        parent::__construct($name);
    }
};
$student = new Student("Steve", "csc/043/2020");
echo $student->getter();

?>