<?php
	class conexion {
		public $con;
		public function __construct(){
			$this->con=new mysqli("localhost","root","","conexion");
			if ($this->con->connect_errno){
				echo"Error por favor corrija los datos de conexión";

			}
			$this->con->query("SET NAMES 'utf8'");
		}
	}
