<?php
$connection = mysqli_connect("localhost","root","","loki");;
if($connection){
    echo "connection established";
}
else{
    echo "connection not";
}
?>