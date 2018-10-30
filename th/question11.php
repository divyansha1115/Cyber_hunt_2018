<?php
session_start(); //start session.
$_SESSION["correct"] = 10;
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
	font-size: 30px;
	font-family: brush-script-std;
	font-style: normal;
	font-weight: 400;
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/amatic-sc:n4:default;brush-script-std:n4:default.js" type="text/javascript"></script>

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--
<script type="text/javascript">
	$(document).ready(function(){
		$("#button").click(function(){
			var senda=$("#ans").val();
   		 $.ajax({
        		type:"POST",
       			url:"handler11.php",
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
            if($_COOKIE['count'] != 11)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
  <script  type="text/javascript" src="scripts/scripts.js"></script>
<center>
  <p><img src="images/cyberpunk.png" width="473" height="255" alt=""/></p>
  <p style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-style: normal; font-weight: 400;">
    I E H<br>
    M I L<br> 
    Q M P<br>
    ? ? ?<br>
    Y U X<br>
  </p>
  <p><br>
    <input type="text" id="ans" name="ans"/>
    <input type="button" id="button" value="Submit" onclick="question11()" />
  </p>
</center>
<p><div id="result"></div>
</body>
</html>