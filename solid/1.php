<?php 


echo '<pre/>';

// SRP

interface ShapeInterface {
    public function area();
}

class Circle implements ShapeInterface {
    public $radius;

    public function construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

class Square implements ShapeInterface {
    public $length;

    public function construct($length) {
        $this->length = $length;
    }

    public function area() {
        return pow($this->length, 2);
    }
}

class AreaCalculator {

    protected $shapes;

    public function __construct($shapes = array()) {
        $this->shapes = $shapes;
    }

    public function sum() {
        foreach($this->shapes as $shape) {
            if(is_a($shape, 'Square')) {
                $area[] = pow($shape->length, 2);
            } else if(is_a($shape, 'Circle')) {
                $area[] = pi() * pow($shape->radius, 2);
            }
        }

        return array_sum($area);
    }

    public function output() {
        return implode('', array(
            "",
                "Sum of the areas of provided shapes: ",
                $this->sum(),
            ""
        ));
    }
}

class SumCalculatorOutputter 
{
	protected $shapes;

	public function __construct(
		$areas 
	)
	{
		$this->areas = $areas;
	}

	public function JSON()
	{
		return $this->areas->output(); 
	}
}

$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6)
);

$areas = new AreaCalculator($shapes);
// $output = new SumCalculatorOutputter($areas);
var_dump($areas->output());

// echo $output->JSON();
// echo $output->HAML();
// echo $output->HTML();
// echo $output->JADE();