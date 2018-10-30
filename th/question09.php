<?php
session_start(); //start session.
$_SESSION["correct"] = 8;
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<meta charset="utf-8">
<style type="text/css">
body,td,th {
	color: #FBFBFB;
}
body {
	background-color: #000000;
}
</style>
</head>
<body>
  <?php
            if($_COOKIE['count'] != 9)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>
  <script type="text/javascript">
    document.cookie = "count=21"
  </script>
<center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><span style="font-size: 40px">Let's go back to childhood!!!</span> </p>
  <p>
    <input type="button" id="button" onclick="window.location.href='puzzle_hard.php'" value="Go"/>
  </p>
</center>

</body>
</html>