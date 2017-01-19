
        <?php 
            $category = $_POST['category'];
            
            $connection = mysqli_connect("127.0.0.1", "michael1009","","hackTJ", 3306)or die(mysql_error());
            $db = mysqli_select_db($connection, "hackTJ");
            
        	$result = mysqli_query($connection, "SELECT * FROM events");
    		
    		while($row = mysqli_fetch_assoc($result)){
    			if($row['category']==$category){
    				echo "-*-".$row['title']."-*-".$row['descrip']."-*-".$row['category'];
    			}
    		}
        ?>
 