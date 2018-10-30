<?php
session_start(); //start session.
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

<body>
	

<center>
Sorry Wrong answer
<?php
	    $_SESSION["Wrong"] = $_SESSION["Wrong"]+ 1;
	    
	    ?>
<a href="javascript:history.back()">Try Again</a>
</center>
</body>
</html>