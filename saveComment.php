<?php
    session_start();
    $email = addslashes($_SESSION['email']);//this is the key for the comments table
    $title = addslashes($_SESSION['title']);
   $descrip =  addslashes($_POST['descrip']);
     $connection = mysqli_connect("127.0.0.1", "michael1009","","hackTJ", 3306)or die(mysql_error());
     $db = mysqli_select_db($connection, "hackTJ");
	 $result = mysqli_query($connection, "SELECT * FROM comments");//still have to create table
	 
    		 $sql = "INSERT INTO comments (title, email, descrip)
            VALUES ('$title', '$email', '$descrip')";
            if ($connection->query($sql) === TRUE) {
                    header("Location: issuePage.php");
                } 
                else {
                    echo "Error: " . $sql . "<br>" . $connection->error;
                }
?>