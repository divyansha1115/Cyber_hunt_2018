
<?php
session_start(); //start session.
$_SESSION["correct"] = 3;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
   
 <title>Use Space</title>
   
 <link href="css/style.css" rel="stylesheet" />
 <style type="text/css">
 body {
	background-color: #000000;
}
 body,td,th {
	color: #FFFFFF;
}
 </style>
</head>


<body>
	<?php
            if($_COOKIE['count'] != 20)
                {   //echo "cheat";
                    header('Location: cheat.php'); //redirect URL 
                 }
         
        ?>

    
<div id="container">

       
<div id="bird"></div>

        
<div id="pole_1" class="pole"></div>
        
<div id="pole_2" class="pole"></div>

    
</div>

   
<div id="score_div">
        
<p><b>Score: </b><span id="score">0</span></p>
     
<p><b>Speed: </b><span id="speed">10</span></p>
    
</div>

   
<button id="restart_btn">Restart</button>

    
<script src="js/jquery.min.js"></script>
    
<script src="scripts/script.js"></script>


</body>


</html>

