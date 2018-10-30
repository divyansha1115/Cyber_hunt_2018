<?php
session_start(); //start session.
$_SESSION["correct"] = 12;
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
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--
<script type="text/javascript">
	$(document).ready(function(){
		$("#button").click(function(){
			var senda=$("#ans").val();
   		 $.ajax({
        		type:"POST",
       			url:"handler13.php",
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
            if($_COOKIE['count'] != 13)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
  <script  type="text/javascript" src="scripts/scripts.js"></script>
<center>
  <p>&nbsp;</p>
  <p><em><img src="images/cyberpunk.png" width="474" height="244" alt=""/></em></p>
  <p><em>In an Exhibition seven cars of different companies <br> Cadillac, Ambassador, Fiat, Maruti, Mercedes, Bedford and Fargo <br>are standing facing to east in the following order :<br>
    1:-Cadillac is next to right of Fargo.<br>
2:-Fargo is fourth to the right of Fiat.<br>
3:-Maruti car is between Ambassador and Bedford.<br>
4:-Fiat which is third to the left of Ambassador, is at one end.<br><br>
Now the question is...<br>
Which of the cars are on both the sides of cadillac car ?<br>

  <input type="text" id="ans" name="ans"/>
  </em><br>
  <input type="button" id="button" value="gotcha" onclick="question13()"/>
  </p>
</center>
<p><div id="result"></div>
</body>
</html>