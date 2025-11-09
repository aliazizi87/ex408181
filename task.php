<?php 

abstract class Shape {
    const Unit = " cm <sup>2</sup>";
    
    abstract public function area();
}

class Rectangle extends Shape {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function area() {
        return $this->width * $this->height;
    }
}

class Circle extends Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function area() {
        return pi() * (($this->radius) * ($this->radius));
    }
}


$rectangle = new Rectangle(5 , 3);

$circle = new Circle(4);

echo "Area rectangle is: ". $rectangle->area() . shape::Unit;
echo "<br>";
echo "Area circle is: ". $circle->area() .  Shape::Unit;
