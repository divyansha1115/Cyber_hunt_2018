<?php
session_start(); //start session.
$_SESSION["correct"] = 17;
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


<body>
	<?php
            if($_COOKIE['count'] != 100)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
	<script  type="text/javascript" src="scripts/scripts.js"></script>
<center>
<p>&nbsp;</p>
<p><img src="images/cyberpunk.png" width="504" height="360" alt=""/></p>
<p>Congratulaions on your successful completion of the event "Cyber Hunt By Edports"<br> 
  <input type="button" id="button" value="Submit" onclick="final()" />
</p>
<p><div id="result"></div>
</center>
</body>
</html>
