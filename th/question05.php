
<?php
session_start(); //start session.
$_SESSION["correct"] = 4;
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<meta charset="utf-8">
<style type="text/css">
body,td,th {
	color: #F9F9F9;
}
body {
	background-color: #000000;
	font-size: 30px;
	font-family: antic-didone;
	color: #FFFFFF;
	font-style: normal;
	font-weight: 400;
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/lancelot:n4:default;antic-didone:n4:default.js" type="text/javascript"></script>

</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--
<script type="text/javascript">
	$(document).ready(function(){
		$("#button").click(function(){
			var senda=$("#ans").val();
   		 $.ajax({
        		type:"POST",
       			url:"handler5.php",
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
            if($_COOKIE['count'] != 5)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
<center>
<script  type="text/javascript" src="scripts/scripts.js"></script>
<p><img src="images/cyberpunk.png" width="492" height="284" alt=""/></p>
<p>1+3=3,<br>
  2+4=10,<br>
  3+8=30,<br>
  4+5=32,<br>
  5+8=60,<br>
  7+8=??<br>
  
  <input type="text" id="ans" name="ans"/><BR>
  <input type="button" id="button" value="Submit" onclick="question5()" />
</p>
<p><div id="result"></div>
</center>

</body>
</html>