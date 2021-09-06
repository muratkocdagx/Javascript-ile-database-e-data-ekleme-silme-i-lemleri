<?php 
	try{
		$db = new PDO("mysql:host=localhost;dbname=telephone_directory;charset=utf8","root","");
	}catch(PDOException $e){
		echo $e->getMessage();
		die();
	}

	$list = $db->query("SELECT * from directory")->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($list);

 ?>