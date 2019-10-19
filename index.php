<?php
try {
	require_once 'pdo-connect.php';
	$sql = "SELECT * FROM crud";
	$rows = $db->query($sql);
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
foreach ($rows as $row) {
	//echo "<pre>";
	//print_r($row);
	//echo "</pre>";
	echo $row['firstname']." ".$row[2]."<br>";
}

?>