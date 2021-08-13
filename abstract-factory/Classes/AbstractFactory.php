<?php
namespace Classes;

interface AbstractFactory
{
    function createProductA(): AbstractProductA;
    function createProductB(): AbstractProductB;
}
