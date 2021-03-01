<?php 
if($_SERVER['REQUEST_METHOD'] == "POST") {
echo"successful";
header('Location:logout.php');}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
</head>
<body>
	<h1>LOGIN</h1>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="pass" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login"value="login"></td>
			</tr>
		</table>
	</form>

</body>
</html>