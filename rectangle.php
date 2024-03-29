<?php
include_once('Shape.php');

class rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;

    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter()
    {
        return ($this->width + $this->height) * 2;
    }
}

?>