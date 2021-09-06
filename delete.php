<?php 
	try{
		$db = new PDO("mysql:host=localhost;dbname=telephone_directory;charset=utf8","root","");
	}catch(PDOException $e){
		echo $e->getMessage();
		die();
	}



        $delete = $db->prepare("DELETE from directory where directory_id=:delete_data");
		$delete_statu = $delete->execute(array(
			"delete_data" => $_POST["id"]
		));
		
		echo $delete_statu;

 ?>