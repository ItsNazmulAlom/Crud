<?php
try {
	require_once 'pdo-connect.php';
	$sql = "SELECT * FROM crud";
	$result = $db->query($sql);
$count = $result->rowCount();

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
echo "total number of coumn in Croud Table:".$count;