<?php
include 'db.php';
if(isset($_POST['submit']))
{
    $uname=$_POST['username']; //jo html ma use hua ho ga wo name aya ga(attribute)
    $password=$_POST['password'];
    $sql="select * from customer where username='$uname' and password='$password'";  ///database sa aya ga=var
    $que=mysqli_query($con,$sql);
    if(mysqli_num_rows($que)>0)
    {
        echo "<script>alert('You are Sucessfully Login')</script>";
        echo "<script>window.open('index.php','_self')</script>";
        exit;
       
    }
    else{
        echo"<script>alert('Wrong Username & Password')
         window.location.href = 'loginsignup.php';</script>";
    }
}
?>
