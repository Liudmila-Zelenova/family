<?php

class Person
{
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }

    function sayHi($name)
    {
        return "Hi, $name, I`m " . $this->name;
    }

    function setHp($hp)
    {
        if ($this->hp + $hp > 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }

    function getAge()
    {
        return $this->age;
    }
    function getHp()
    {
        return $this->hp;
    }
    function getName()
    {
        return $this->name;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }
    function getInfo()
    {
        return "Меня зовут " . $this->getName() . "<br> Мне " . $this->getAge() . " лет" . "<br> Моя мама " . $this->getMother()->getName() . "<br> Мой папа " . $this->getFather()->getName() . "<br> Мой дедушка по папе " . $this->getFather()->getFather()->getName() . "<br> Мой дедушка по маме " . $this->getMother()->getFather()->getName() . "<br> Моя бабушка по папе " . $this->getFather()->getMother()->getName() . "<br> Моя бабушка по маме " . $this->getMother()->getMother()->getName();
    }
}

$igor = new Person("Игорь", "Петров", 78);
$ivan = new Person("Иван", "Иванов", 75);
$natalia = new Person("Наталья", "Петрова", 76);
$galina = new Person("Галина", "Иванова", 75);

$alex = new Person("Алексей", "Иванов", 42, $galina, $ivan);
$olga = new Person("Ольга", "Иванова", 41, $natalia, $igor);
$valera = new Person("Валера", "Иванов", 12, $olga, $alex);

echo $valera->getInfo();