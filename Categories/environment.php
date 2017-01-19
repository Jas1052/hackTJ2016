<!DOCTYPE html>
<html>
    <head>
        <title>Environment</title>
        <link href="../style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript">
          function loadTopics(t){
                var text;
                var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
    		            if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
    		                text = xmlhttp.responseText;
    		                //alert(text);
    		            }   
    		        };
                var parameters= "category=Environment";
                xmlhttp.open("POST", "../getEvents.php", false);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send(parameters);
                
                var textArray = text.split("-*-");
                var eventList = document.getElementById("eventList");
                for(var x=0; x <= textArray.length;x++){
                    if(textArray[x].trim()!=""){
                        var textNode = document.createTextNode(textArray[x]);
                        var linkTitle = document.createElement('a');
                        var liTitle = document.createElement('li');
                        liTitle.class = "categories";
                        linkTitle.href = "../issuePage.php?title="+textArray[x]+"&descrip="+textArray[x+1]+"&category="+textArray[x+2];
                        //alert("../issuePage.php?title="+textArray[x]+"&descrip="+textArray[x+1]+"&category="+textArray[x+2]);
                        linkTitle.appendChild(textNode);
                        liTitle.appendChild(linkTitle);
                        eventList.appendChild(liTitle);x=x+2;
                         var breakTag = document.createElement('br');
                        eventList.appendChild(breakTag);
                    }
    
                    //alert(textArray[x]);
                }
                    
          }
        </script>
    </head>
    <body onload="loadTopics();">
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="../main.php">Home</a></li>
      
      <li class="active"><a href="economy.php">Economy</a></li>
      <li class="active"><a href="politics.php">Politics</a></li>
      <li class="active"><a href="foreign.php">Foreign Policy</a></li>
      
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


<div class="row">
        <div style="text-align:center" class="col-sm-7">
            <p><h3>Forums:</h3></p><br>
            <ul id="eventList">
                
            </ul>

        </div>
        <div class="col-sm-4 col-sm-offset-1">
            <p>News:</p>
            
            <a href="http://www.cnn.com/health">
                <img src="http://www.difret.com/wp-content/uploads/2015/03/CNN.jpg" alt="CNN Health" style="width:200px; height:100px">
            </a>
            <br><br>
            
            <a href="http://www.nytimes.com/section/science?action=click&pgtype=Homepage&region=TopBar&module=HPMiniNav&contentCollection=Science&WT.nav=page">
                <img src="http://1yp98336w2771vmsu71ag44y.wpengine.netdna-cdn.com/wp-content/uploads/2013/03/the-new-york-times.jpg" alt="New York Times Science" style="width:200px; height:125px">
            </a>
            <br><br>
            <a href="http://climate.nasa.gov/">
                <img src="http://www.nasa.gov/sites/default/files/images/nasaLogo-570x450.png" alt="New York Times Science" style="width:200px; height:125px">
            </a>
            
            
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
        

    </body>
</html>