<?php 
		
	/**
	 * ? Method Chaining	
     * *When many methods are called in a single instruction,
     * *in PHP's term it is called Method Chaining. 
     * Each method in class in Method Chaining, that is, 
     * the method of the class returns the object of that class. 
     * For Method Chaining, instead of writing value return in class, 
     * we have to write return $this;
     * 
	 */
	class a {
		public $name;

		public function firstName($fn)
		{
			$this->name = $fn;
			return $this;
		}

		public function lastName($ln)
		{
			$this->name .= " $ln";
			return $this;
		}

		public function __destruct()
		{
			echo $this->name;
		}
	}

	$obj = new a();
	$obj->firstName('Asif')->lastName('Rahman');