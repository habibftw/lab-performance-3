<?php
echo "ADMIN";
	//session_start();
	if(isset($_COOKIE['username'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>





	<h1>Welcome Home! <?=$_COOKIE['username']?></h1> 




	
	<input type="text" name="" onkeyup="search(this.value)" />
	<div id="content">
		
	</div>
	<script type="text/javascript">
	
		function search(val){
			
				var xhttp = new XMLHttpRequest();
				xhttp.open("POST", "../search/search.php", true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('key='+val);
			
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					 	document.getElementById('content').innerHTML = this.responseText;					 
					}
				};
		}


	</script>


	
	<a href="userlist.php">User List</a> | 
	<a href="adduser.php">Add User</a> | 
	<a href="../php/logout.php">logout</a>

</body>	
</html>


<?php		
	}else{
		header('location: login.php');
	}

?>

