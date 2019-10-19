<?php
try {
	require_once 'pdo-connect.php';
	$sql = "INSERT INTO  crud (firstname,lastname,email,gender,age)VALUES(:firstname,:lastname,:email,:gender,:age)";
	
	$result = $db->prepare($sql);

	$values = array(':firstname' =>'Mr.'.$_GET['fname'],
                    ':lastname'  => $_GET['lname'],
                    ':email'     =>$_GET['email'],
                    ':gender'    =>$_GET['gender'],
                    ':age'       =>$_GET['age']
                    );
	
	$res = $result->execute($values);



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