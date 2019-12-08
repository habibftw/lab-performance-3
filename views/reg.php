<php
	session_start();
	$_SESSION['utype'] = $utype;



?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="../php/regCheck.php">
		<fieldset>
			<legend>Registration</legend>
		<table>
			<tr>
				<td>Employee Name:</td>
				<td><input type="text" name="ename"></td>
			</tr>
			
			<tr>
				<td>UserName:</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td>Contact NO:</td>
				<td><input type="text" name="contact"></td>
			</tr>
			
			
			<tr> 
					<td>
					<input type="radio" name="utype" value="Employee"/> Employee
						<input type="radio" name="utype" value="Admin"/>Admin
						<br>
						
					<p>____________________________</p>
					</td>
				</tr>
				
				<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
			
		</table>
		</fieldset>
	</form>

	<a href="login.php">SignIn</a>
</body>
</html>