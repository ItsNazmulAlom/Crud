<?php
try {
	require_once 'pdo-connect.php';
	$sql = "INSERT INTO  crud (firstname,lastname,email,gender,age)VALUES('kamal','barua','kamal@gmail.com','male','35')";
	//$result = $db->query($sql);
	$result = $db->exec($sql);
//$count = $result->rowCount();

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
//var_dump($result);
echo $result. "Record INserted in database"."Last Insert id ".$db->lastInsertID();