<?php


$link = mysqli_connect("localhost", "root", "root", "talent_hunt");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
