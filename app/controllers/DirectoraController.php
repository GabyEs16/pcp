<?php 
	class DirectoraController {
		public function calendario() {
			$panel = "directora-Panel.php";
			Response::render("home", 
				["panel" => $panel]);
		}
	}
 ?>