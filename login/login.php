<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$email = $_POST['email'];
        $password = $_POST['password'];
        
        $connection = mysqli_connect("127.0.0.1", "michael1009","","hackTJ", 3306)or die(mysql_error());
        $db = mysqli_select_db($connection, "hackTJ");
        
    	$result = mysqli_query($connection, "SELECT * FROM loginInfo");
		
		while($row = mysqli_fetch_assoc($result)){
			if($row['email']==$email && $row['password']==md5($password)){
				session_start();
				$_SESSION['email'] = $email;
				header("Location: ../main.php");//not main main is not user specific just general page
  				exit();
			}
		}

		
	 ?>
	 <div id="oops">Oops!</div><br>
	 <label>Incorrect credentials. Click to go back to login page.</label>
	 <button type="button" onclick="location.href='login.html'">Login Page</button>
</body>
</html>