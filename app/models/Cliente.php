<?php 
	class Cliente extends Model{
		protected $table = "CLIENTE";
		public $nombre;
		public $rfc;
		public $credito;
		public $diasPago;
		public $diasLimite;
		public $modalidad;
		public $pa;
		public $usr;
		public $psw;
	}
 ?>