
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<?php 
	      

		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['male']) && empty($_POST['female']) && empty($_POST['email']) && empty($_POST['username']) && empty($_POST['pass']) && empty($_POST['recoveryemail']))
			 {
				echo"Please fill up the the form";
	
			}
			else {
				$FirstName = $_POST['fname'];

				$lastName = $_POST['lname'];

				$gender = $_POST['gender'];

				$email = $_POST['email'];
				$username=$_POST['username'];
				$pass=$_POST['pass'];
				$recoveryemial=$_POST['recoveryemail'];
				
				
			

			$f=fopen("save.txt","a");
			fwrite($f,$FirstName. "" .$lastName. "" .$gender. "" .$email. "" .$username. "" .$pass. "" .$recoveryemial. "\n");
			fclose($f);

			header('Location:login.php');
			exit;
		      }
		  
		      
		  

		}	

			
		
	?>

</body>
</html>