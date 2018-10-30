<?php
session_start(); //start session.
$_SESSION["correct"] = 9;
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
       			url:"handler10.php",
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
            if($_COOKIE['count'] != 10)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
  <script  type="text/javascript" src="scripts/scripts.js"></script>
<center>
<p>&nbsp;</p>
<p><img src="images/cyberpunk.png" width="486" height="290" alt=""/></p>
<p>624<br>312<br>320<br>160<br>168<br>???<br>92<br>







  <input type="text" id="ans" name="ans"/>
  <input type="button" id="button" value="Send" onclick="question10()" />
</p>
<p><div id="result"></div>
</center>
</body>
</html>