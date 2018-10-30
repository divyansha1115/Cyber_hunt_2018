<?php
session_start(); //start session.
$_SESSION["correct"] = 5;
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
	font-size: 20px;
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
       			url:"handler6.php",
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
            if($_COOKIE['count'] != 6)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
  
<center>
<p><img src="images/cyberpunk.png" width="489" height="270" alt=""/></p>
<p> 
Introducing a boy, a girl said, "He is the son of the daughter of the father of my uncle." <br>
How is the boy related to the girl?</p>
<p>
<script  type="text/javascript" src="scripts/scripts.js"></script>
  <input type="text" id="ans" name="ans"/><BR>
  <input type="button" id="button" value="Submit" onclick="question6()"/>
</p>
<p><div id="result"></div>
</center>

</body>
</html>

