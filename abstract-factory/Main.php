<?php
namespace App;
use Classes\AbstractFactory;
use Classes\ConcreteFactory2;
use Classes\ConcreteFactory1;
require_once 'Classes/AbstractFactory.php';
require_once 'Classes/ConcreteFactory2.php';
require_once 'Classes/ConcreteFactory1.php';

class Main
{
    static function clientCode(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        echo $productB->usefulFunctionB() . "/n";
        echo $productB->anotherUserFulFunctionB($productA) . "/n";
    }

    static function main1()
    {
        echo "Client: Testing client code with the first factory type:/n";
        Self::clientCode(new ConcreteFactory1());
        
        echo "/n";
        
        echo "Client: Testing the same client code with the second factory type:/n";
        Self::clientCode(new ConcreteFactory2());
    }
}

\App\Main::main1();
