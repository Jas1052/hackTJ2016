<?php
    session_start();
    $title = $_SESSION['title'];//this is the key for the comments table
     $connection = mysqli_connect("127.0.0.1", "michael1009","","hackTJ", 3306)or die(mysql_error());
     $db = mysqli_select_db($connection, "hackTJ");
	 $result = mysqli_query($connection, "SELECT * FROM comments");//still have to create table
	 
    		while($row = mysqli_fetch_assoc($result)){
    			if($row['title']==$title){
    			    $requestString = "-*-".$row['email'].": ".$row['descrip']."-*-";
    				echo $requestString;
    			}
    		}
?>