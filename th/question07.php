<?php
session_start(); //start session.
$_SESSION["correct"] = 6;
?>

    
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<meta charset="utf-8">
<style type="text/css">
body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #000000;
	font-size: 25px;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif, "Adobe Caslon Pro";
	font-style: normal;
	font-weight: 400;
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/aguafina-script:n4:default;alex-brush:n4:default.js" type="text/javascript"></script>

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--
<script type="text/javascript">
	$(document).ready(function(){
		$("#button").click(function(){
			var senda=$("#ans").val();
   		 $.ajax({
        		type:"POST",
       			url:"handler7.php",
        		data:{"answer":senda} // without quotes
    			}).done(function(response) {
        			$("#result").html(response);
   			});
		});
	});
</script>
-->
<body>
  <?php
            if($_COOKIE['count'] != 7)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
<script  type="text/javascript" src="scripts/scripts.js"></script>
<center>
<p><img src="images/cyberpunk.png" width="500" height="273" alt=""/></p>
<p> What do these words have in common:- <br>
  1. Madam<br>
  2. Racecar<br>
  3. Repaper<br>
  4. Tenet<br>
  5. Radar<br>
  6. Sagas<br>
  <input type="text" id="ans" name="ans"/>
  <input type="button" id="button" value="Submit" onclick="question7()"/>
</p>
<p><div id="result"></div>
</center>

</body>
</html>