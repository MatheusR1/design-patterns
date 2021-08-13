<?php
namespace Classes;
require_once 'AbstractProductA.php';

class ConcreteProductA2 implements AbstractProductA {

    function usefulFunctionA(): string
    {
        return "retorno no produto A2";
    }
}