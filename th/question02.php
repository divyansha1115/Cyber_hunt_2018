

<?php
session_start(); //start session.
$_SESSION["correct"] = 1;
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
	font-size: 10px;
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
       			url:"handler2.php",
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
            if($_COOKIE['count'] != 2)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
        
  <script  type="text/javascript" src="scripts/scripts.js"></script>
  <p align="right"><?php
      echo $_SESSION['counter'];
      ?></p>
<center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><img src="images/cyberpunk.png" width="496" height="274" alt=""/></p>
<p><strong style="font-size: 30px; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;">Solve the rebus below:-</strong></p>
<p><br>
  <img src="images/2nd.jpg" width="133" height="142" style="width:300px;height:300px;">  <span style="font-size: 40px">+  </span> <img src="images/2nda.jpg" width="224" height="357" style="width:300px;height:300px;"><BR>
</p>
<p>
  <input type="text" id="ans" name="ans"/>
</p>
<p><BR>
  <input type="button" id="button" value="Riddle Me" onclick="question2()" />
</p>
<p><div id="result"></div>

</center>

</body>
</html>