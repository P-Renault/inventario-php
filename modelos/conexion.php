<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=sis_inventario",
			            "root",
			            "password");

		$link->exec("set names utf8");

		return $link;

	}

}