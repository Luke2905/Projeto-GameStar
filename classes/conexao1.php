<?php

class Conexao1{
	private static $instancia;

	public static function getConexao(){
		if(!isset(self::$instancia)){
			self::$instancia = new PDO('mysql:host=localhost; dbname=gamestar; charset=utf8', 'root','9651luke');
				return self::$instancia;
			}else{
				return self::$instancia;
		}
	}
}
