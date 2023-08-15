<?php
$con=mysqli_connect("localhost","root","","login");

if(mysqli_connect_error()){
    echo"cannot connect to data base";
    exit();
}
?>