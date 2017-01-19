<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hiddenPass = md5($password);
            
            $connection = mysqli_connect("127.0.0.1", "michael1009","","hackTJ", 3306)or die(mysql_error());
            $db = mysqli_select_db($connection, "hackTJ");
    	    $result = mysqli_query($connection,  "SELECT * FROM loginInfo");
    	    
            while($row = mysqli_fetch_assoc($result)){
                if($row['email'] == $email){
                    header("Location: login.html");
                    $message = "Email already exists.";
					echo "<script type='text/javascript'>alert('$message');</script>";
                    exit();
                }
            }
            
           mysqli_query($connection,"INSERT INTO loginInfo(email,password) VALUES('$email','$hiddenPass');");
           header("Location: login.html");
        ?>
      <button id="login" type="button" onclick="location.href='login.html'">Back to login</button>
        
    </body>
</html>
