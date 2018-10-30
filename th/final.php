<?php
$name=$_REQUEST["user"];
$id=$_REQUEST["id"];
$con=mysqli_connect("localhost","root","root","talent_hunt");

if(!$con){
	die("not connected!!!");
}
session_destroy();	
$sql="insert into user(name,scholar) values('$name','$id')";
$i=mysqli_query($con,$sql);

if($i>0){
		session_start();
		$_SESSION['scholar'] = $id;
		$_SESSION['loggedin'] = true;
		$_SESSION["loginTime"] = time();
		$_SESSION["Wrong"] = 0;
		$_SESSION["correct"] = 0;
  	    header('Location: index.php');
    }
    
    else{
    	echo "Insertion Failed!!!!!!<br>";
    }
?>
