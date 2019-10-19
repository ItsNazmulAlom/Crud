<?php
try {
	require_once 'pdo-connect.php';
	$sql = "SELECT * FROM crud";
	$result = $db->query($sql);
	//$all = $result->fetchAll(PDO::FETCH_ASSOC);
	$all = $result->fetchAll(PDO::FETCH_NUM);
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
echo "<pre>";
print_r($all);

echo "</pre>";