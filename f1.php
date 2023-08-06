<?php
include co.php ;
if(isset($_POST['submit'])){
    $file=$_FILES['image']['name'];
     $query ="insert into loki(Id,image) values(1,'$file')";
     $res=mysqli_query($con,$query);
     if($res){
        move_uploaded_file($_FILES['image']['tmp_name'],"$file");
     }
}
?>