<?php
	
	require_once('../db/db.php');

	$term = $_POST['key'];
	$con = getConnection();
	$sql = "select ename from users where ename like '{$term}%'";
	$result = mysqli_query($con, $sql);
	$row = "";
	while($data = mysqli_fetch_assoc($result)){
		$row .= $data['ename']."|"."<br>";
	}
	echo $row;
?>