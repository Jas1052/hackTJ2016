
        <?php
        
            session_start();
            
            if($_SESSION['eventID'] == null){
                $_SESSION['eventID'] = 1;
                $eventID = $_SESSION['eventID'];
            }
            else{
                $_SESSION['eventID'] = $_SESSION['eventID']+1;
                $eventID = $_SESSION['eventID'];
            }
			
            $connection = mysqli_connect("127.0.0.1", "michael1009","","hackTJ", 3306)or die(mysql_error());
            $db = mysqli_select_db($connection, "hackTJ");
            
        	$result = mysqli_query($connection, "SELECT * FROM events");
    		
    		$numRows = mysqli_num_rows($result);
    		while($row = mysqli_fetch_assoc($result)){
    			if($row['eventID']==$eventID){
    			    $requestString = $row['title'].", -:".$row['descrip'].", -:".$row['category'].", -:";
    				echo $requestString;
    				if($_SESSION['eventID'] >= $numRows){
    				    unset($_SESSION['eventID']);
    				}
      				exit();
    			}
    		}
        ?>
