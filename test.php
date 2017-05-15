<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
Class car{
		public static $weight = 1500;
		public static $power;
		public function publicMethod(){
			echo self::$power;
		}

	}   				

	$OpelAstra = new car();
	$BMW_X6 = new car();

	Class TV{
		public static $height;
		public static $width;
		public static $display;
		public function publicMethod(){
			echo self::$height;
		}
	}

	$Samsung = new TV();
	$Sony = new TV();

	Class pen
	{
		public static $color;
		public static $type;
		public function publicMethod(){
			echo self::$type;
		}
	}

	$parker = new pen();
	$pilot = new pen();

	Class Duck{
		public static $color;
		public static $Weight;
		public function publicMethod(){
			echo self::$color;
		}
	}

	$domestic_duck = new Duck();
	$True_duck = new Duck();
	$white_duck = new Duck();

	Class goods{
		public static $price;
		public static $brand;
		public function publicMethod(){
			echo self::$price;
		}
	}

	$ipad = new goods();
	$bred = new goods();

	echo "Some words";

?>
