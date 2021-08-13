<?php
namespace Classes;
require_once 'AbstractFactory.php';
require_once 'AbstractProductA.php';
require_once 'ConcreteProductA2.php';
require_once 'AbstractProductB.php';
require_once 'ConcreteProductB2.php';

class ConcreteFactory2 implements AbstractFactory
{
    function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}
