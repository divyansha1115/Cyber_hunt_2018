
<?php
session_start(); //start session.
?>
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
	<!-- <?php
            //if($_COOKIE['count'] != 1000)
                {   //echo "cheat";
                    //header('Location: cheat.php'); //redirect URL 
                 }
         
        ?> -->
	<script  type="text/javascript" src="scripts/scripts.js"></script>
<center>
<p>&nbsp;</p>
<p><img src="images/cyberpunk.png" width="504" height="360" alt=""/></p>
<p>You completed the quiz in <?php  $_SESSION["timeLogged"] = time() - $_SESSION["loginTime"];
echo $_SESSION["timeLogged"];?> seconds <br>
 Number of wrong attempts :<?php echo $_SESSION["Wrong"];?><br>
 Number of correct questions:<?php echo $_SESSION["correct"];?><br>
<a href="logout.php">Exit</a>
</p>
<p><div id="result"></div>

</center>
</body>
</html>