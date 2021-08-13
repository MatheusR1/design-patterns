<?php
namespace Classes;
require_once 'AbstractProductB.php';
require_once 'AbstractProductA.php';

class ConcreteProductB2 implements AbstractProductB
{
    function useFulFunctionB(): string
    {
        return "retorno da funcao B";
    }

    function anotherUserFulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "olha esse rotorno do objeto concreto A {$result}";
    }
}
