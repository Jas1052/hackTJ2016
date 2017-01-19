<!DOCTYPE html>
<html>
    <head>
        <title>Politics</title>
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
                var parameters= "category=Politics";
                xmlhttp.open("POST", "../getEvents.php", false);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send(parameters);
                
                var textArray = text.split("-*-");
                var eventList = document.getElementById("eventList");
                for(var x=0; x <= textArray.length;x++){
                    if(textArray[x].trim()!=""){
                        var textNode = document.createTextNode(textArray[x]);
                        //alert(textArray[3*x-1]);
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
      <li class="active"><a href="foreign.php">Foreign Policy</a></li>
      <li class="active"><a href="environment.php">Environment</a></li>
      
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
    
  </div>
</nav>

    <div class="row">
        <div style="text-align:center" class="col-sm-7" >
            <p><h3>Forums:</h3></p>
            <ul id="eventList">
                
            </ul>

        </div>
        <div class="col-sm-4 col-sm-offset-1">
            <p>News:</p>
            
            <a href="http://www.cnn.com/politics">
                <img src="http://www.adweek.com/fishbowldc/wp-content/uploads/sites/10/2015/07/Screen-Shot-2015-07-22-at-2.28.55-PM.png" alt="CNN Politics" style="width:250px; height:150px">
            </a>
            
            
            
            <br><br>
            
            <a href="https://www.whitehouse.gov/sites/whitehouse.gov/files/images/twitter_cards_default.jpg">
                <img src="https://www.whitehouse.gov/sites/whitehouse.gov/files/images/twitter_cards_default.jpg" alt="White House" style="width:250px; height:125px">
            </a>
            
            <br><br>
            
            <a href="http://www.nytimes.com/pages/politics/index.html?action=click&pgtype=Homepage&region=TopBar&module=HPMiniNav&contentCollection=Politics&WT.nav=page">
                <img hscape="200" src="http://1yp98336w2771vmsu71ag44y.wpengine.netdna-cdn.com/wp-content/uploads/2013/03/the-new-york-times.jpg" alt="New York Times Politics" style="width:250px; height:125px">
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