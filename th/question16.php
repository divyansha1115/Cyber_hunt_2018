<?php
session_start(); //start session.
$_SESSION["correct"] = 15;
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
       			url:"handler17.php",
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
            if($_COOKIE['count'] != 16)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
  <script  type="text/javascript" src="scripts/scripts.js"></script>
<center>
  <p>	  <img src="images/cyberpunk.png" width="484" height="253" alt=""/></p>
  <p> <img src="images/whatever2.jpg" style="width:600px;height:600px;"></p>
  <p><BR>
    <input type="text" id="ans" name="ans"/>
    <input type="button" id="button" value="Send" onclick="question16()"/>
  </p>
</center>
<p><div id="result"></div>
</body>
</html>