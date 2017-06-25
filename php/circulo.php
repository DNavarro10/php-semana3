<?php 
	include 'figura.php';
	
	class circulo extends figura{
		

		function __construct(){
			
			echo "soy redondo";	
		
		}
		
		public function area(){
			 $area = (PI*(radio * radio))/2; 
 			return $area;
		}

		public function perimetro(){
			return 2*3.14*$radio;
		}
}
	echo area();
?>