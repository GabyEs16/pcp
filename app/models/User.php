<?php 
	class User extends Model{
		public $table = "user";
		public $primarykey = "id";
		public $name;
		public $age;
		public $email;
		public function __construct($name, $age, $email){
			$this->name = $name;
			$this->age = $age;
			$this->email = $email;
		}
		//Devuelve query para insertar una nueva educadora
		public function getSPinsert(){
			return "call p_usuario('".$this->name."', ".$this->age.",'".$this->email."')";
		}
		//Devuelve query para consultar la lista de educadoras
		public function getSPconsult(){
			return "call v_usuario()";
		}
	}
 ?>