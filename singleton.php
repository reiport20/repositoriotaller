	<?php
	class basedatos{
	private static $conexion=null;
	private function construct(){
	//codigo constructor
	}
	public  function  obtenconexion(){
	if(self::$conexion instanceof basedatos){
		return	self::$conexion;
	}else{
		return	self::$conexion=new basedatos;
	}
	}	
	}
 	?>