{"filter":false,"title":"register.php","tooltip":"/register.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":22,"column":31},"end":{"row":22,"column":32},"action":"insert","lines":["p"],"id":211}],[{"start":{"row":22,"column":29},"end":{"row":22,"column":32},"action":"remove","lines":["php"],"id":212},{"start":{"row":22,"column":29},"end":{"row":22,"column":30},"action":"insert","lines":["h"]}],[{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"insert","lines":["t"],"id":213}],[{"start":{"row":22,"column":31},"end":{"row":22,"column":32},"action":"insert","lines":["m"],"id":214}],[{"start":{"row":22,"column":32},"end":{"row":22,"column":33},"action":"insert","lines":["l"],"id":215}],[{"start":{"row":28,"column":35},"end":{"row":28,"column":38},"action":"remove","lines":["php"],"id":216},{"start":{"row":28,"column":35},"end":{"row":28,"column":36},"action":"insert","lines":["h"]}],[{"start":{"row":28,"column":36},"end":{"row":28,"column":37},"action":"insert","lines":["t"],"id":217}],[{"start":{"row":28,"column":37},"end":{"row":28,"column":38},"action":"insert","lines":["m"],"id":218}],[{"start":{"row":28,"column":38},"end":{"row":28,"column":39},"action":"insert","lines":["l"],"id":219}],[{"start":{"row":0,"column":0},"end":{"row":50,"column":0},"action":"remove","lines":["","<!DOCTYPE html>","<html>","<head>","\t<title>Registration</title>","\t<link href=\"\" rel=\"stylesheet\">","</head>","","<body>","\t<?php","            $email = $_POST['email'];","            $password = $_POST['password'];","            $hiddenPass = md5($password);","            ","            $connection = mysqli_connect(\"127.0.0.1\", \"michael1009\",\"\",\"hackTJ\", 3306)or die(mysql_error());","            $db = mysqli_select_db($connection, \"hackTJ\");","    \t    $result = mysqli_query($connection,  \"SELECT * FROM loginInfo\");","    \t    ","            while($row = mysqli_fetch_assoc($result)){","                if($row['email'] == $email){","                \t$message = \"Email already exists\";","\t\t\t\t\techo \"<script type='text/javascript'>alert('$message');</script>\";","\t\t\t\t\theader(\"Location: login.html\");","                    exit();","                }","            }","            ","           mysqli_query($connection,\"INSERT INTO loginInfo(email,password) VALUES('$email','$hiddenPass');\");","           header(\"Location: login.html\");","        ?>","\t<div id=\"form\">","\t<form action=\"register.php\" method=\"post\">","\t\t<h1>Registration</h1><br><br>","\t\t<div id=\"heading\">Create your account to voice your opinion today!</div><br>","\t\t<div id=\"input\">","\t\t\t<div class=\"inputwrap\">","\t\t\t\t<label>Email: </label><input name=\"email\" class=\"textbox\" type=\"text\" placeholder=\"Your email here\" autofocus required>","\t\t\t</div>","\t\t\t<div class=\"inputwrap\">","\t\t\t\t<label>Password: </label><input name=\"password\" class=\"textbox\" type=\"password\" placeholder=\"&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;\" required><br>","\t\t\t</div>","\t\t</div>","\t\t<div id=\"button\"><div class=\"inputWrap\">","\t\t\t<button id=\"register\" type=\"submit\" class=\"button\">Register</button>","\t\t\t<button id=\"login\" type=\"button\" class=\"button\" onclick=\"location.href='login.html'\">Back to login</button>","\t\t</div></div>","\t</form>","\t</div>","</body>","</html>",""],"id":221},{"start":{"row":0,"column":0},"end":{"row":30,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","    </head>","    <body>","        <?php","            $email = $_POST['email'];","            $password = $_POST['password'];","            $hiddenPass = md5($password);","            ","            $connection = mysqli_connect(\"127.0.0.1\", \"michael1009\",\"\",\"users\", 3306)or die(mysql_error());","            $db = mysqli_select_db($connection, \"users\");","    \t    $result = mysqli_query($connection,  \"SELECT * FROM loginInfo\");","    \t    ","            while($row = mysqli_fetch_assoc($result)){","                if($row['email'] == $email){","                    header(\"Location: fail.html\");","                    exit();","                }","            }","            ","           session_start();","\t\t   $_SESSION['email'] = $email;","           mysqli_query($connection,\"INSERT INTO loginInfo(email,password) VALUES('$email','$hiddenPass');\");","           header(\"Location: inputUserInfo.html\");","        ?>","      <button id=\"login\" type=\"button\" onclick=\"location.href='login.html'\">Back to login</button>","        ","    </body>","</html>",""]}],[{"start":{"row":16,"column":38},"end":{"row":16,"column":42},"action":"remove","lines":["fail"],"id":222},{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"insert","lines":["r"]}],[{"start":{"row":16,"column":39},"end":{"row":16,"column":40},"action":"insert","lines":["e"],"id":223}],[{"start":{"row":16,"column":40},"end":{"row":16,"column":41},"action":"insert","lines":["g"],"id":224}],[{"start":{"row":16,"column":41},"end":{"row":16,"column":42},"action":"insert","lines":["i"],"id":225}],[{"start":{"row":16,"column":42},"end":{"row":16,"column":43},"action":"insert","lines":["s"],"id":226}],[{"start":{"row":16,"column":43},"end":{"row":16,"column":44},"action":"insert","lines":["t"],"id":227}],[{"start":{"row":16,"column":44},"end":{"row":16,"column":45},"action":"insert","lines":["e"],"id":228}],[{"start":{"row":16,"column":45},"end":{"row":16,"column":46},"action":"insert","lines":["r"],"id":229}],[{"start":{"row":16,"column":46},"end":{"row":16,"column":47},"action":"insert","lines":["."],"id":230}],[{"start":{"row":16,"column":46},"end":{"row":16,"column":47},"action":"remove","lines":["."],"id":231}],[{"start":{"row":16,"column":45},"end":{"row":16,"column":46},"action":"remove","lines":["r"],"id":232}],[{"start":{"row":16,"column":44},"end":{"row":16,"column":45},"action":"remove","lines":["e"],"id":233}],[{"start":{"row":16,"column":43},"end":{"row":16,"column":44},"action":"remove","lines":["t"],"id":234}],[{"start":{"row":16,"column":42},"end":{"row":16,"column":43},"action":"remove","lines":["s"],"id":235}],[{"start":{"row":16,"column":41},"end":{"row":16,"column":42},"action":"remove","lines":["i"],"id":236}],[{"start":{"row":16,"column":40},"end":{"row":16,"column":41},"action":"remove","lines":["g"],"id":237}],[{"start":{"row":16,"column":39},"end":{"row":16,"column":40},"action":"remove","lines":["e"],"id":238}],[{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"remove","lines":["r"],"id":239}],[{"start":{"row":16,"column":38},"end":{"row":16,"column":39},"action":"insert","lines":["l"],"id":240}],[{"start":{"row":16,"column":39},"end":{"row":16,"column":40},"action":"insert","lines":["g"],"id":241}],[{"start":{"row":16,"column":40},"end":{"row":16,"column":41},"action":"insert","lines":["o"],"id":242}],[{"start":{"row":16,"column":41},"end":{"row":16,"column":42},"action":"insert","lines":["i"],"id":243}],[{"start":{"row":16,"column":42},"end":{"row":16,"column":43},"action":"insert","lines":["n"],"id":244}],[{"start":{"row":16,"column":42},"end":{"row":16,"column":43},"action":"remove","lines":["n"],"id":245}],[{"start":{"row":16,"column":41},"end":{"row":16,"column":42},"action":"remove","lines":["i"],"id":246}],[{"start":{"row":16,"column":40},"end":{"row":16,"column":41},"action":"remove","lines":["o"],"id":247}],[{"start":{"row":16,"column":39},"end":{"row":16,"column":40},"action":"remove","lines":["g"],"id":248}],[{"start":{"row":16,"column":39},"end":{"row":16,"column":40},"action":"insert","lines":["o"],"id":249}],[{"start":{"row":16,"column":40},"end":{"row":16,"column":41},"action":"insert","lines":["g"],"id":250}],[{"start":{"row":16,"column":41},"end":{"row":16,"column":42},"action":"insert","lines":["i"],"id":251}],[{"start":{"row":16,"column":42},"end":{"row":16,"column":43},"action":"insert","lines":["n"],"id":252}],[{"start":{"row":16,"column":51},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":253},{"start":{"row":17,"column":0},"end":{"row":17,"column":20},"action":"insert","lines":["                    "]}],[{"start":{"row":17,"column":20},"end":{"row":18,"column":66},"action":"insert","lines":["$message = \"wrong answer\";","echo \"<script type='text/javascript'>alert('$message');</script>\";"],"id":254}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"insert","lines":["\t"],"id":255}],[{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"insert","lines":["\t"],"id":256}],[{"start":{"row":18,"column":2},"end":{"row":18,"column":3},"action":"insert","lines":["\t"],"id":257}],[{"start":{"row":18,"column":3},"end":{"row":18,"column":4},"action":"insert","lines":["\t"],"id":258}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"insert","lines":["\t"],"id":259}],[{"start":{"row":17,"column":32},"end":{"row":17,"column":44},"action":"remove","lines":["wrong answer"],"id":260},{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["E"]}],[{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["m"],"id":261}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["a"],"id":262}],[{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["i"],"id":263}],[{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["l"],"id":264}],[{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":[" "],"id":265}],[{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["a"],"id":266}],[{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["l"],"id":267}],[{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"insert","lines":["r"],"id":268}],[{"start":{"row":17,"column":41},"end":{"row":17,"column":42},"action":"insert","lines":["e"],"id":269}],[{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"insert","lines":["a"],"id":270}],[{"start":{"row":17,"column":43},"end":{"row":17,"column":44},"action":"insert","lines":["d"],"id":271}],[{"start":{"row":17,"column":44},"end":{"row":17,"column":45},"action":"insert","lines":["y"],"id":272}],[{"start":{"row":17,"column":45},"end":{"row":17,"column":46},"action":"insert","lines":[" "],"id":273}],[{"start":{"row":17,"column":46},"end":{"row":17,"column":47},"action":"insert","lines":["e"],"id":274}],[{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"insert","lines":["x"],"id":275}],[{"start":{"row":17,"column":48},"end":{"row":17,"column":49},"action":"insert","lines":["i"],"id":276}],[{"start":{"row":17,"column":49},"end":{"row":17,"column":50},"action":"insert","lines":["s"],"id":277}],[{"start":{"row":17,"column":50},"end":{"row":17,"column":51},"action":"insert","lines":["t"],"id":278}],[{"start":{"row":17,"column":51},"end":{"row":17,"column":52},"action":"insert","lines":["s"],"id":279}],[{"start":{"row":17,"column":52},"end":{"row":17,"column":53},"action":"insert","lines":["."],"id":280}],[{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"insert","lines":[" "],"id":281}],[{"start":{"row":17,"column":53},"end":{"row":17,"column":54},"action":"remove","lines":[" "],"id":282}],[{"start":{"row":23,"column":11},"end":{"row":24,"column":33},"action":"remove","lines":["session_start();","\t\t   $_SESSION['email'] = $email;"],"id":283}],[{"start":{"row":23,"column":10},"end":{"row":23,"column":11},"action":"remove","lines":[" "],"id":284}],[{"start":{"row":23,"column":9},"end":{"row":23,"column":10},"action":"remove","lines":[" "],"id":285}],[{"start":{"row":23,"column":8},"end":{"row":23,"column":9},"action":"remove","lines":[" "],"id":286}],[{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"remove","lines":[" "],"id":287}],[{"start":{"row":23,"column":6},"end":{"row":23,"column":7},"action":"remove","lines":[" "],"id":288}],[{"start":{"row":23,"column":5},"end":{"row":23,"column":6},"action":"remove","lines":[" "],"id":289}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"remove","lines":[" "],"id":290}],[{"start":{"row":23,"column":3},"end":{"row":23,"column":4},"action":"remove","lines":[" "],"id":291}],[{"start":{"row":23,"column":2},"end":{"row":23,"column":3},"action":"remove","lines":[" "],"id":292}],[{"start":{"row":23,"column":1},"end":{"row":23,"column":2},"action":"remove","lines":[" "],"id":293}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":1},"action":"remove","lines":[" "],"id":294}],[{"start":{"row":22,"column":12},"end":{"row":23,"column":0},"action":"remove","lines":["",""],"id":295}],[{"start":{"row":24,"column":29},"end":{"row":24,"column":42},"action":"remove","lines":["inputUserInfo"],"id":296},{"start":{"row":24,"column":29},"end":{"row":24,"column":30},"action":"insert","lines":["l"]}],[{"start":{"row":24,"column":30},"end":{"row":24,"column":31},"action":"insert","lines":["o"],"id":297}],[{"start":{"row":24,"column":31},"end":{"row":24,"column":32},"action":"insert","lines":["g"],"id":298}],[{"start":{"row":24,"column":32},"end":{"row":24,"column":33},"action":"insert","lines":["i"],"id":299}],[{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"insert","lines":["n"],"id":300}],[{"start":{"row":10,"column":72},"end":{"row":10,"column":77},"action":"remove","lines":["users"],"id":301},{"start":{"row":10,"column":72},"end":{"row":10,"column":73},"action":"insert","lines":["h"]}],[{"start":{"row":10,"column":73},"end":{"row":10,"column":74},"action":"insert","lines":["a"],"id":302}],[{"start":{"row":10,"column":74},"end":{"row":10,"column":75},"action":"insert","lines":["c"],"id":303}],[{"start":{"row":10,"column":75},"end":{"row":10,"column":76},"action":"insert","lines":["k"],"id":304}],[{"start":{"row":10,"column":76},"end":{"row":10,"column":77},"action":"insert","lines":["T"],"id":305}],[{"start":{"row":10,"column":77},"end":{"row":10,"column":78},"action":"insert","lines":["J"],"id":306}],[{"start":{"row":11,"column":49},"end":{"row":11,"column":54},"action":"remove","lines":["users"],"id":307},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"insert","lines":["h"]}],[{"start":{"row":11,"column":50},"end":{"row":11,"column":51},"action":"insert","lines":["a"],"id":308}],[{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"insert","lines":["c"],"id":309}],[{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"insert","lines":["k"],"id":310}],[{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"insert","lines":["T"],"id":311}],[{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"insert","lines":["J"],"id":312}]]},"ace":{"folds":[],"scrolltop":1.5,"scrollleft":0,"selection":{"start":{"row":16,"column":51},"end":{"row":16,"column":51},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":0,"state":"start","mode":"ace/mode/php"}},"timestamp":1454795831667,"hash":"24db4812e06fce131dfc4310c78e812ddacd11fa"}