<?php
namespace Classes;
require_once 'AbstractProductA.php';

interface AbstractProductB
{
    function useFulFunctionB(): string;
    function anotherUserFulFunctionB(AbstractProductA $collaborator): string;
}
