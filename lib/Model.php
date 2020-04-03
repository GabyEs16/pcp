<?php 
	class Model{

		public function consult($sp, $cols){
			$db = new DB(2);
			$result = $db->consult($sp, $cols);

			return $result;
		}
		public function insert($sp){
			$db = new DB(1);
			return $db->insert($sp);
		}
	}
 ?>