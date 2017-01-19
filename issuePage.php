<!DOCTYPE html>
<html>
    <head>
        <title>The Debator</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript">
            function loadComments(){
                var comments;
                var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
    		            if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
    		                comments = xmlhttp.responseText;
    		                //alert(comments);
    		            }   
    		        };
                xmlhttp.open("GET", "getComments.php", false);
                xmlhttp.send();
                var commentList = document.getElementById('commentList');//need to make still
                var arrayComments = comments.split("-*-");
                for(var x=0;x<arrayComments.length;x++){
                    
                    //var commmentText = arrayComments[x].replace("..","")
                    if(arrayComments[x] != null && arrayComments[x] != ""){
                        var trElement = document.createElement('tr');
                        var thElement = document.createElement('td');
                        var commentTextNode = document.createTextNode(arrayComments[x]);
                        thElement.appendChild(commentTextNode);
                        trElement.appendChild(thElement);
                        
                        //alert(arrayComments[x]);
                        document.getElementById("commentList").appendChild(trElement);
                    }
                }
                    
                    
            }
        </script>
    </head>
    <body onload="loadComments()">
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="../main.php">Home</a></li>
      
      <li class="active"><a href="Categories/economy.php">Economy</a></li>
      <li class="active"><a href="Categories/foreign.php">Foreign Policy</a></li>
      <li class="active"><a href="Categories/politics.php">Politics</a></li>
      <li class="active"><a href="Categories/environment.php">Environment</a></li>
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li> 
        </ul>
      </li>
    </ul>
    <div ><ul id="loginBox" class="nav navbar-nav navbar-right">
      
    </ul></div>
  </div>
</nav>
        <?php
            session_start();
            $title= trim($_GET['title']);
            $descrip = $_GET['descrip'];
            $category = $_GET['category'];
            if($title != null){
                
                $_SESSION['title'] = $title;
                $_SESSION['descrip'] = $descrip;
                $_SESSION['category'] = $category;
            }
            
            $connection = mysqli_connect("127.0.0.1", "michael1009","","hackTJ", 3306)or die(mysql_error());
            $db = mysqli_select_db($connection, "hackTJ");
            
        	$result = mysqli_query($connection, "SELECT * FROM events");
        	
        ?>
<div class="container">
<div class="jumbotron"><h2><center><?php echo $_SESSION['category']?></center></h2></div></div>
    <div><center><h3><?php echo $_SESSION['title']?></h3></center></div>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body"><?php echo $_SESSION['descrip']?></div>
    </div>
</div>

       <form action="saveComment.php" method="POST" align="center">
           <textarea rows="4" cols="50" name="descrip" placeholder="Join the Conversation!"></textarea><br>
           <button type="submit" class="button" >Submit</button>
           <br><br>
           <div class="container" align="left" ><table border="5" class="table table-bordered" align="left" id="commentList"></table></div>
           
           
           
       </form> 
       
        <footer class="footer">
    <div class="container">
        <center>
        <p class="text-muted">
            HackTJ &nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp&nbsp
            The Debator &nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp&nbsp
            2016 
        </p>
        </center>
    </div>
</footer>
    </body>
</html>