<?php
	Router::add("index", "MainController", "index");
	Router::add("login", "MainController", "login");
	Router::add("directora", "directoraController", "calendario");
	Router::add("educadora", "educadoraController", "calendario");
	Router::add("404", "MainController", "notfound");
 ?>