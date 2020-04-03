<?php 
	class MainController{
		public function index(){
			Response::render("index");
		}
		public function login(){
			
			$nivel = 1;
			switch ($nivel) {
				case 1:
					header("Location: directora");
					break;
				case 2:
					header("Location: educadora");
					break;
			}
		}
		public function notfound() {
			Response::render("404");
		}
	}
 ?>