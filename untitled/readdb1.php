<?php
$id = $_GET["id"];
$con = mysqli_connect('localhost','root','12345678','ryaniot');
if(!$con){
    die('couid not conect :'.mysqli_error($con));
}
mysqli_select_db($con,"ryaniot");
