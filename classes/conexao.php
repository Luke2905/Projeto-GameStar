<?php

class Conexao{
	private static $instancia;

	public static function getConexao(){
		if(!isset(self::$instancia)){
			self::$instancia = new PDO('mysql:host=localhost; dbname=gamestar; charset=utf8', 'root','nega2029');
				return self::$instancia;
			}else{
				return self::$instancia;
		}
	}
}
