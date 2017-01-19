<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>The Debater</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript">
            function start(){
                getCurrentEvent(document.getElementById('issue1'), document.getElementById('issue2'));
                checkLog(document.getElementById('loginBox'));

            }
            //window.onload = start;
            
            function getCurrentEvent(t,tOther){
               // alert("getCurrentEvent");
                var text;
                var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
    		            if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
    		                text = xmlhttp.responseText;
    		                //alert(text);
    		            }   
    		        };
                    xmlhttp.open("GET", "mainGetEvent.php", false);
                    xmlhttp.send();
                    
                    createListElement(text,t);
                    
                    var text2;
                    var xmlhttp2 = new XMLHttpRequest();
                    xmlhttp2.onreadystatechange = function() {
    		            if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200){
    		                text2 = xmlhttp2.responseText;
    		                //alert(text2);
    		            }   
    		        };
                    xmlhttp2.open("GET", "mainGetEvent.php", false);
                    xmlhttp2.send();
                    
                    createListElement(text2,tOther);
                    
            }
            function createListElement(str, t){
                var stringArray = str.split(", -:");
                if(stringArray != null){
                    //will split into title (array[0]) and descrip array[1] and category array[2]
                    var titleText = document.createTextNode(stringArray[0]);
                    var titleObject = document.createElement('a');
                    titleObject.appendChild(titleText);
                    var stringArrayText = stringArray[1].substring(0,stringArray[1].length-1);
                    titleObject.href = "issuePage.php?title="+stringArray[0]+"&descrip="+stringArray[1]+"&category="+stringArray[2];//incomplete
                    var descripText = stringArrayText;
                    if(descripText.length > 300){
                        descripText = descripText.substring(0,301);
                        descripText = descripText.substring(0, Math.min(descripText.length, descripText.lastIndexOf(" ")));
                        descripText = descripText +"...";
                    }
                    else{
                        descripText = descripText +"...";
                    }
                    var descripTextNode = document.createTextNode(descripText);
                    var descripObject = document.createElement('p');
                    descripObject.appendChild(descripTextNode);
                    t.appendChild(titleObject);
                    t.appendChild(descripObject);
                }
                
            }
            function checkLog(t){
                //alert("checkLog");
                var email = '<?php echo $_SESSION['email']; ?>';
                //alert(email);
                if(email == null || email==""){
 
                    var liElement = document.createElement('li');
                    var registerText = document.createTextNode("Sign Up");
                    var registerBox = document.createElement('a');
                    registerBox.href = "login/register.html";
                    registerBox.class = "glyphicon glyphicon-user";
                    registerBox.appendChild(registerText);
                    liElement.appendChild(registerBox);
                    
                    var liElement2 = document.createElement('li');
                    var loginText = document.createTextNode("Login");
                    var loginBox = document.createElement('a');
                    loginBox.href = "login/login.html";
                    loginBox.class = "glyphicon glyphicon-user";
                    loginBox.appendChild(loginText);
                    liElement2.appendChild(loginBox);
                    
                    t.appendChild(liElement);
                    t.appendChild(liElement2);
                }
                else{
                    var liNew = document.createElement('li');
                    var newIssueText = document.createTextNode("Create New Topic");
                    var newIssue = document.createElement('a');
                    newIssue.href = "newIssue.html";
                    newIssue.class = "glyphicon glyphicon-user";
                    newIssue.appendChild(newIssueText);
                    liNew.appendChild(newIssue);
                    
                    var text = document.createTextNode(email);
                    var userBox = document.createElement('a');
                    userBox.appendChild(text);
                    userBox.class = "glyphicon glyphicon-user";
                    var liElement = document.createElement('li');
                    liElement.appendChild(userBox);
                    
                    var logoutText = document.createTextNode("Logout");
                    var logoutBox = document.createElement('a');
                    logoutBox.appendChild(logoutText);
                    logoutBox.class = "glyphicon glyphicon-user";
                    logoutBox.href = "/login/logout.php";
                    var liLogout = document.createElement('li');
                    liLogout.appendChild(logoutBox);
                    t.appendChild(liNew);
                    t.appendChild(liElement);
                    t.appendChild(liLogout);
                }
            }
        </script>
    </head>
    <body onload="start()">
        
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

<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-sm-6">
                <h1 style="text-align:left; font-style:plain;">The Debater</h1>
                <p style="text-align:left; font-style:italic;">&nbspCan't hate, must debate.</p>
            </div>
            <div class="col-sm-6">
                <img src="Debate_Logo.jpg" alt="logo" width="70%" height="70%" align="right">
            </div>
        </div>
     </div>
  <br>
    <div class="row">
        <div style="text-align:center" class="col-sm-5" onload="getCurrentEvent(this)" id="issue1">
           

        </div>
        <div style="text-align:center" class="col-sm-5 col-sm-offset-2" onload="getCurrentEvent(this)" id="issue2">
        </div>
    
    </div>
</div>

<footer class="footer">
    <div class="container">
        <center>
        <p class="text-muted">
            HackTJ &nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp&nbsp
            The Debater &nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp&nbsp
            2016 
        </p>
        </center>
    </div>
</footer>

        <?php
            session_start();
            unset($_SESSION['title']);
            unset($_SESSION['descrip']);
            $email = $_SESSION['email'];
        ?>
</body>
</html>