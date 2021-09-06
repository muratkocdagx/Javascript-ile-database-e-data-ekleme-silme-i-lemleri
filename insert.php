<?php 

if (isset($_POST["full_name"]) && isset($_POST["email"]) && isset($_POST["phone"]) ) {
	try{
		$db = new PDO("mysql:host=localhost;dbname=telephone_directory;charset=utf8","root","");
	}catch(PDOException $e){
		echo $e->getMessage();
		die();
	}
	
	$prepare = $db->prepare("INSERT INTO directory SET full_name=:full_name, phone=:phone, email=:email");
	
	$insert = $prepare->execute(array(
		"full_name" => $_POST["full_name"],
		"phone" => $_POST["phone"],
		"email" => $_POST["email"]
	));

	echo $insert;
}




?>