
<?php
session_start(); //start session.
?>
<?php
            if($_SESSION["correct"] != 0)
                {   //echo "cheat";
                    header('Location: form.php'); //redirect URL 
                 }
         
        ?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<meta charset="utf-8">
<style type="text/css">
body,td,th {
	font-family: Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
	color: #FFFFFF;
}
body {
	background-color: #070707;
	font-family: aladin;
	font-style: normal;
	font-weight: 400;
	font-size: 25px;
}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/aladin:n4:default.js" type="text/javascript"></script>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--
<script type="text/javascript">
	$(document).ready(function(){
		$("#button").click(function(){
			var senda=$("#ans").val();
   		 $.ajax({
        		type:"POST",
       			url:"handler.php",
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
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                {
                	$a=1;
                   
                 }
              else
              {
              	 header('Location: form.php'); //redirect URL
              }
         
        ?>
	<script  type="text/javascript" src="scripts/scripts.js"></script>
	<p align="right"><?php echo $_COOKIE['count'] ;?></p>
<center>
<p>&nbsp;</p>
<p><img src="images/cyberpunk.png" width="504" height="360" alt=""/></p>
<p>Hey there ,do you know something, I am in Air, Water and Land<BR> But i am not present in everything. Recognize me?
	 <BR> 
  <input type="text" id="ans" name="ans"/>
  <input type="button" id="button" value="gotcha" onclick="index()" />
</p>
<p><div id="result"></div>
	
</center>
</body>
</html>