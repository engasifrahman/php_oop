<?php 
	########### static method and method chaining #######################

	//When many methods are called in a single instruction,
	// in PHP's term it is called Method Chaining. 
	// Each method in class in Method Chaining, that is, 
	// the method of the class returns the object of that class. 
	// For Method Chaining, instead of writing value return in class, 
	// we have to write return $this;
	
	class a{
		public $a;
		public static $b;
		const C = 'HI';

		public static  function test(){
			self::$b = ', This is static method from a <br>';

			return a::C.self::$b;
		}

		public static function getB(){
			echo static::test();
			echo self::test();
		}

		public function m1(){
			$this->a = 'Asif';
			return $this;
		}

		public function m2(){
			$this->a .= ' Rahman';
			return $this;
		}

		public function __destruct(){
			echo $this->a;
		}
	}

	class b extends a{
		public static  function test(){
			parent::$b = ', This is static method from b <br>';
			return a::C.parent::$b;

			self::$b = ', This is static method from b <br>';
			return a::C.self::$b;
		}
	}

	a::getB();
	b::getB();

	// $obj = new a;
	// $obj->m1()->m2();
	// echo $obj->test();

 ?>
