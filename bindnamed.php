<?php
try {
	require_once 'pdo-connect.php';
	$sql = "INSERT INTO  crud (firstname,lastname,email,gender,age)VALUES(:firstname,:lastname,:email,:gender,:age)";
	
	$result = $db->prepare($sql);
	$result->bindValue(':firstname','Mr.'.$_GET['fname']);
	$result->bindValue(':lastname',$_GET['lname']);
	$result->bindValue(':email',$_GET['email']);
	$result->bindValue(':gender',$_GET['gender']);
	$result->bindValue(':age',$_GET['age'],PDO::PARAM_INT);
	$res = $result->execute();



	$errorInfo = $db->errorInfo();
	
	if (isset($errorInfo[2])) {
		$error = $errorInfo[2];
	}
} catch (Exception $e) {
	$error = $e->getMessage();
	
}
if (isset($error)){
	echo " Error :".$error;
}
var_dump($res);