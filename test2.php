<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

Class entity{   // суперкласс
	public $title;
}

Class car extends entity{
		public static $weight = 1500;
		public static $power;
		public function publicMethod(){
			echo self::$power;
		}
		public $title = "SomeTypoOfCar";

	}   				

	$OpelAstra = new car();
	$BMW_X6 = new car();

	interface SimpleInterface{
		public function publicMethod();
	}

	Class TV implements SimpleInterface{
		public static $height;
		public static $width;
		public static $display;
		public function publicMethod(){
			echo self::$height;
		}
	}

	$Samsung = new TV();
	$Sony = new TV();

	interface penInterface{
		public function publicMethodPen();
	}

	Class pen implements penInterface
	{
		public static $color;
		public static $type;
		public function publicMethodPen(){
			echo self::$type;
		}
	}

	$parker = new pen();
	$pilot = new pen();

	interface DuckInterface{
		public function publicMethodDuck();
	}

	Class Duck implements DuckInterface{
		public static $color;
		public static $Weight;
		public function publicMethodDuck(){
			echo self::$color;
		}
	}

	$domestic_duck = new Duck();
	$True_duck = new Duck();
	$white_duck = new Duck();

	interface goodsInterface{
		public function publicMethodGoods($price);
	}

	Class goods{
		public static $price;
		public static $brand;
		public function publicMethodGoods(){
			echo self::$price;
		}
	}

	$ipad = new goods();
	$bred = new goods();

	echo "Some words";

?>
