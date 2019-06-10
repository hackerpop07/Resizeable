<?php


class Square implements Resizeable
{
    private $x;

    public function __construct($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    function resize()
    {
        $this->setX($this->getX() * rand(1, 100));
    }

    function acreage()
    {
        $s = $this->getX() ** 2;
        return $s;
    }
}