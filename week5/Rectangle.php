<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Polygon.php';
// namespace ShapeNS;

class Rectangle extends Polygon
{
    public $width;
    public $height;
    public  function getArea()
    {
        return ($this->width * $this->height);
    }
    public function getNumberOfSides()
    {
        return (4);
    }
}
