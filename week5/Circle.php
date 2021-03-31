<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Shape.php';
// namespace ShapeNS;

class Circle extends Shape
{
    public $radius;
    public function getArea()
    {
        return (pi() * $this->radius * $this->radius);
    }
}
