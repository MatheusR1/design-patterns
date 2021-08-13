<?php
namespace Classes;
require_once 'AbstractProductB.php';
require_once 'AbstractProductA.php';

class ConcreteProductB1 implements AbstractProductB
{
    function useFulFunctionB(): string
    {
        return "retorno da funcao B";
    }

    public function anotherUserFulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "olha esse rotorno do objeto concreto A {$result}";
    }
}
