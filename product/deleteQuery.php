<?php
	include_once("../users/conexao.php");
	
	$id = $_GET['id'];

	/*$query = mysqli_query($conectar, "DELETE FROM user WHERE id = '$id'");
	

	//PDO
		$stmt =$pdo->prepare("delete from users where id=" . $_GET['id_user']);
		$stmt->execute();
		*/
		
		
		$stmt = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
		$stmt->bindValue(':id', $id); 

		$stmt->execute();
		//return $stmt->rowCount();
	
	header("location: ./deleteMsg.php");
?>