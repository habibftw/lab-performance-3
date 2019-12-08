<?php
	
	require_once('../db/functions.php');

	if(isset($_POST['submit'])){

		$ename = $_POST['ename'];
		$password = $_POST['pass'];
		$uname = $_POST['uname'];
		$contact = $_POST['contact'];
		$utype = $_POST['utype'];


		if(empty($uname) == true || empty($password) == true || empty($contact) == true || empty($utype) == true || empty($ename) == true){
			echo "null submission!";
		}else{

			$status = register($ename, $uname, $password, $contact,$utype);

			if($status){

				header('location: ../views/login.php?msg=success');
			}else{
				header('location: ../views/reg.php?msg=dberror');
			}
		}

	}else{
		header('location: ../views/reg.php');
	}


?>