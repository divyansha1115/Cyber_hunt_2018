

<?php
session_start(); //start session.
$_SESSION["correct"] = 2;
?>



<!DOCTYPE html>
<html>
<head>
<title>Decode</title>
<meta charset="utf-8">
<style type="text/css">
body,td,th {
	color: #FDFDFD;
}
body {
	background-color: #000000;
	font-family: alex-brush;
	font-size: 30px;
	font-style: normal;
	font-weight: 400;
	color: #FFFFFF;
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/alex-brush:n4:default.js" type="text/javascript"></script>

</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--
<script type="text/javascript">
	$(document).ready(function(){
		$("#button").click(function(){
			var senda=$("#ans").val();
   		 $.ajax({
        		type:"POST",
       			url:"handler3.php",
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
            if($_COOKIE['count'] != 3)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
	<script  type="text/javascript" src="scripts/scripts.js"></script>
<center>
<p><img src="images/cyberpunk.png" width="464" height="280" alt=""/></p>
<p>Decode the meaning:-<br>
  <img src="images/3rd.png" width="288" height="168" style="width:600px;height:300px;"></p>
<p><BR>
  <input type="text" id="ans" name="ans"/><BR>
  <input type="button" id="button" value="Submit" onclick="question3()" />
</p>
<p><div id="result"></div>
</center>

</body>
</html>