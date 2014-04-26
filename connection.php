<?php
class Connection{

   public $gdb = NULL;

	public function __construct(){
	}

	public function openConnection(){
		$dsn = 'mysql:host=gimli.ii.uam.es;dbname=hackathon_solidario';
		$nombre_usuario = 'grupo1';
		$contrasena = 'googleglass';
		$opciones = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		); 

		try{
			$this->gdb = new PDO($dsn, $nombre_usuario, $contrasena, $opciones);
			return true;		
		
		}catch(PDOException $e){
			echo "An error ocurred\n", $ex->getMessage();
			return false;
		}
	}
}
