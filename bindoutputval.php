<?php
try {
	require_once 'pdo-connect.php';
	$sql = "SELECT * FROM crud";
	$result = $db->query($sql);
	$result->execute();
	 $result->bindColumn('id',$id);
	$result->bindColumn('firstname',$fname);
	$result->bindColumn('lastname',$lname);
	$result->bindColumn('email',$email);

	$errorInfo = $db->errorInfo();
	//print_r($errorInfo);
	if (isset($errorInfo[2])) {
		$error = $errorInfo[2];
	}
} catch (Exception $e) {
	$error = $e->getMessage();
	
}
if (isset($error)){
	echo " Error :".$error;
}
while ($row = $result->fetch()) {
	echo $id   .  "     " .$fname . "     ". $lname . "     " .  $email.  "<br>";
}
?>