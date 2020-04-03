<?php 
	class Vehiculo extends Model{

		public $table = "VEHICULO";
		public $primarykey = "idV";
		public $placa;
		public $marca;
		public $modelo;
		public $unidad;
		public $motor;
		public $fkcliente;
		public $status;

		public function __construct($placa, $marca, $modelo, $unidad, $motor, $fkcliente, $status){
			$this->placa = $placa;
			$this->marca = $marca;
			$this->modelo = $modelo;
			$this->unidad = $unidad;
			$this->motor = $motor;
			$this->fkcliente = $fkcliente;
			$this->status = $status;
		}
		public function getSPinsert(){
			return "call p_VEHICULO('".$this->placa."', ".$this->marca.",'".$this->modelo."', '".$this->unidad."', '".$this->motor."', $this->fkcliente)";
		}
		public function getSPconsult(){
			return "call v_VEHICULO($this->fkcliente)";
		}
	}
 ?>