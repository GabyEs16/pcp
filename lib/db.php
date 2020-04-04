<?php 
	class DB{
		private $url = "";
		private $db = "gelagos_ge";
		private $mysqli;
		public function __construct($level){
			switch ($level) {
				case 1:
					$this->mysqli = new mysqli($this->url, "", "", $this->db);
					break;
				case 2:
					$this->mysqli = new mysqli($this->url, "", "", $this->db);
					break;
			}
		}
		public function consult($sp, $cols){
			$array = array();
			$consult = mysqli_query($this->mysqli, $sp) or die($this->mysqli->error);
			if ($consult) {
				$i = 0;
				while($data = mysqli_fetch_row($consult)){

					for ($j=0; $j < $cols; $j++) { 
						$array[$j][$i] = $data[$j];
					}
					$i++;
				}

				$this->clearbuffer($consult);
				return $array;
			}
			else
			{
				return false;
			}
		}
		public function insert($sp){
			return mysqli_query($this->mysqli, $sp) or die($this->mysqli->error);
		}
		public function clearbuffer($consulta) 
		{
			mysqli_free_result($consulta);
			while(mysqli_more_results($this->mysqli) && mysqli_next_result($this->mysqli)) {
			    $dummyResult = mysqli_use_result($this->mysqli);
			    if($dummyResult instanceof mysqli_result) {
			        mysqli_free_result($this->mysqli);
			    }
			}
		}
	}
 ?>