<?php 

class Conexion{

	static public function conectar(){

		#PDO("nombre del servidor; nombre de la base de datos", "usuario", "contraseña")

		$link = new PDO("mysql:host=localhost:3306;dbname=curso-php", 
			            "marcibiz", 
			            "r742iUOlPR8[g;");

		$link->exec("set names utf8");

		return $link;

	}

}
