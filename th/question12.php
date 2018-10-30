<?php
session_start(); //start session.
$_SESSION["correct"] = 11;
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
       			url:"handler12.php",
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
            if($_COOKIE['count'] != 12)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
 <script  type="text/javascript" src="scripts/scripts.js"></script>
<center>
  <p>	  <img src="images/cyberpunk.png" width="484" height="253" alt=""/></p>
  <p>Guess The Tv show....</p>
  <p> <img src="images/mr_white.jpg" style="width:300px;height:300px;"> <img src="images/walkers.jpg" style="width: 300px; height: 300px; font-size: xx-large;"></p>
  <p>
    <input type="text" id="ans" name="ans"/>
    <input type="button" id="button" value="Send" onclick="question12()"/>
  </p>
</center>
<p><div id="result"></div>
</body>
</html>