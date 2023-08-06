<?php
    $fullname=$_POST['fname'];
    $username=$_POST['user'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $pwd=$_POST['password'];
    $category=$_POST['drop'];
    $gender=$_POST['gender'];

    $conn=mysqli_connect('127.0.0.1','root','','selfcareuser');
    $sql="INSERT INTO users VALUES('$fullname','$username','$email','$mobile','$pwd',' $category','$gender');";
    if (mysqli_query($conn,$sql)){
        
            header('Location:../login1.html');
       
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
?>
