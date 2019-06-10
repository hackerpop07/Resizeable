<?php

class Circle implements Resizeable
{
    public $radius;
    public $name;

    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    function resize()
    {
        $this->setRadius($this->getRadius() * rand(1, 100));
    }

    function acreage()
    {
        $s =  pi() * ($this->getRadius() ** 2);
        return $s;
    }
}
