<?php
namespace Classes;
require_once 'AbstractProductA.php';

class ConcreteProductA1 implements AbstractProductA{

    function usefulFunctionA(): string
    {
        return "resultado de produto A1.";
    }  
}