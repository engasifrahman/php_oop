<?php 
		
	/**
	 * ?Static Method
	 * *Definition: Also declared using the static keyword within a class definition.
	 * *Behavior: Can be called directly using the class name without creating an object instance. 
	 * They cannot access non-static properties of the class directly (as they are not bound to a specific object).
	 * *Purpose: Used for utility functions that don't rely on object state and are generally relevant to the class as a whole. 
	 * Examples include helper functions, validation functions, or factory methods for creating objects.
	 */
	class Foo {
		public $name;
		public static $msg;
		const GREATINGS = 'Hi';

		public static  function greatings()
		{
			return self::$msg = self::GREATINGS . ", greatings from Foo \n";

			return self::GREATINGS . self::$msg;
		}

		public static function getGreatings()
		{
			echo self::greatings(); // Late binding (runtime)
			echo static::greatings(); // Late static binding (runtime)
		}
	}

	class Bar extends Foo {
		const GREATINGS = 'Hello';

		public static function greatings()
		{
			self::$msg = ", greatings from Bar \n";
			return self::GREATINGS . self::$msg;
		}
	}

	Foo::getGreatings();
	
	echo "-----------------------------------------------------------" . PHP_EOL;

	Bar::getGreatings();