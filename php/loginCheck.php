<?php
	session_start();
	require_once('../db/functions.php');
	//define(name, value)
	
	
	if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$password = $_POST['pass'];
		//$utype =
		//$type = 'Admin';
		//$_SESSION['utype'] = $name[2];
						 $_SESSION['usertype'] = $user['utype'];
						 
						 
		$uname = $_POST['uname'];
		$password = $_POST['pass'];
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$query = "SELECT * FROM users WHERE uname='$uname' AND pass='$pass' ";
		$results = mysqli_query($conn, $query);
			$logged_in_user = mysqli_fetch_assoc($results);
			
						 
						 

		


		if(empty($uname) == true || empty($password) == true){
			echo "null submission!";
		}else{

			$count = validate($uname, $password);

			if ($logged_in_user['utype'] == 'Employee') {
				
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $password;
				

				setcookie("username", $uname, time()+3600, "/");
				header('location: ../views/emphome.php');

			}
			/*else if($count > 0 && $utype != $type)
			{
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $password;

				setcookie("username", $uname, time()+3600, "/");
				header('location: ../views/emphome.php');
			}*/
			
			else{
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $password;

				setcookie("username", $uname, time()+3600, "/");
				header('location: ../views/adminhome.php');
			}
		}
	}else{
		header('location: ../views/login.php');
	}


?>