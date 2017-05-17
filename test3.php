<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
//namespace car;
// namespace duck;
// namespace pen;


Class entity{   // суперкласс
	public $title;
}

Abstract Class goods{  //Абстрактный суперкласс "товар" 
		public static $price;
		public static $brand;
		// $arg1 = 0;
		// $arg2 = 0;
		abstract function publicMethodGoods();
		//	echo self::$price;
		
	}


Class car extends goods{
		public static $weight = 1500;
		public static $power;
		public function publicMethod(){
			echo self::$power;
		}
		public $title = "SomeTypoOfCar";
		public function publicMethodGoods(){

		}
	}   				

	$OpelAstra = new car();
	$BMW_X6 = new car();

	interface SimpleInterface{
		public function publicMethod();
	}

	Class TV  extends goods implements SimpleInterface{
		public static $height;
		public static $width;
		public static $display;
		public function publicMethod(){
			echo self::$height;
		}
		public function publicMethodGoods(){

		}
	}

	$Samsung = new TV();
	$Sony = new TV();

	interface penInterface{
		public function publicMethodPen();
	}

	Class pen extends goods implements penInterface
	{
		public static $color;
		public static $type;
		public function publicMethodPen(){
			echo self::$type;
		}
		public function publicMethodGoods(){

		}
	}

	$parker = new pen();
	$pilot = new pen();

	interface DuckInterface{
		public function publicMethodDuck();
	}

	Class Duck extends goods implements DuckInterface{
		public static $color;
		public static $Weight;
		public function publicMethodDuck(){
			echo self::$color;
		}
		public function publicMethodGoods(){

		}
	}

	$domestic_duck = new Duck();
	$True_duck = new Duck();
	$white_duck = new Duck();

	interface goodsInterface{
		public function publicMethodGoods($price); 
	}

	function __autoload($goods) //это функция! не метод!
{
$filePath = './classes/' . $goods . '.class.php';
if (file_exists($filePath)) {
include "$filePath";
} else {
die("Класса $goods не существует");
}
}
$test = new TestClass(); // вызывается __autoload

Class Bin extends goods {
	public function getSum($arg1, $arg2){
		$sum=0;
		$sum = $arg1 + $arg2;
	}
	public function delete($id){
		//some deleting action
	}
	public function publicMethodGoods(){

		}
}


Class order extends Bin {

	public function registration(){

	}
	public function printinfo(){
		echo $sum;
		echo $title;
		echo $price;
	}
	public function publicMethodGoods(){

		}
}
	

	echo "Some words";

?>
