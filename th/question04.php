
<?php
session_start(); //start session.
$_SESSION["correct"] = 3;
?>

<!DOCTYPE html>
<html>
<head>
<title>Fast Fingers</title>
<meta charset="utf-8">
<style type="text/css">
body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #000000;
}
</style>
</head>
<body>
<?php
            if($_COOKIE['count'] != 4)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
<center>
<p>&nbsp;</p>
<script type="text/javascript">
	document.cookie = "count = 20"
</script>
<p><img src="cyberpunk.png" width="500" height="262" alt=""/></p>
<p style="font-size: 30px">Hey so you think your fingers are fast enough?try this then:-- </p>
<button onclick="window.location.href='flatbird.php'">Continue</button>
</center>


</body>
</html>
