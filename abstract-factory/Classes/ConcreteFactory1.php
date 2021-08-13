<?php
namespace Classes;
require_once 'AbstractProductA.php';
require_once 'ConcreteProductA1.php';
require_once 'AbstractProductB.php';
require_once 'ConcreteProductB1.php';

class concreteFactory1 implements AbstractFactory
{

    function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}
