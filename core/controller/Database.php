<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="id22234970_kevin1";$this->pass="Kkevin1130!";$this->host="localhost";$this->ddbb="id22234970_inventario";
		//$this->user="evilnaps_admin";$this->pass="l00lapal00za";$this->host="localhost";$this->ddbb="evilnaps_pvm";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode='';");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>