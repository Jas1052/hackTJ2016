<!DOCTYPE html>
<html>
    <body>
        <?php
            $category = addslashes($_POST['category']);
            $title = addslashes($_POST['title']);
            $descrip = addslashes($_POST['descrip']);
            
            $connection = mysqli_connect("127.0.0.1", "michael1009","","hackTJ", 3306)or die(mysql_error());
            $db = mysqli_select_db($connection, "hackTJ");
            
            $sql = "INSERT INTO events (category, title, descrip)
            VALUES ('$category', '$title', '$descrip')";
            if ($connection->query($sql) === TRUE) {
                    header("Location: main.php");
                } 
                else {
                    echo "Error: " . $sql . "<br>" . $connection->error;
                }
            
            
        	//mysqli_query($connection, "INSERT INTO events(category,title,descrip) VALUES('$category','$title','$descrip');");
        	//header("Location: ");
        	//header("Location: main.php");
        ?>
        
    </body>
</html>