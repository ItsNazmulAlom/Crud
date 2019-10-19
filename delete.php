<?php


try{
	require_once 'pdo-connect.php';
	$sql ="DELETE FROM crud WHERE lastname='barua' ";
	$delete = $db->exec($sql);
	$errorInfo = $db->errorInfo();


	if (isset($errorInfo[2])){
		$error = $errorInfo[2];
	}

} catch (PDOException $e){
	$error = $e->getMessage();
}
echo $delete. "Records Deleted from Db";