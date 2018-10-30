<?php
session_start(); //start session.
$_SESSION["correct"] = 14;
?>

<!DOCTYPE html>
<html>
<head>
<title>Dcipher the Rebus</title>
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
       			url:"handler15.php",
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
            if($_COOKIE['count'] != 15)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
  <script  type="text/javascript" src="scripts/scripts.js"></script>
<center>
  <p><img src="images/cyberpunk.png" width="504" height="360" alt=""/></p>
  <p>Solve the puzzle below:-<br>
    <img src="images/15.png" style="width:500px;height:500px;"><br> 
    
    <input type="text" id="ans" name="ans"/><BR>
    <input type="button" id="button" value="Riddle Me" onclick="question15()"/>
  </p>
</center>
<p><div id="result"></div>
</body>
</html>