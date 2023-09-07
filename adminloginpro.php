<?php
include 'database.php';
if(isset($_POST['submit']))
{
     $email=$_POST['email'];
     $password=$_POST['password'];

     echo "Email: " . $email . "<br>";
     echo "Password: " . $password;
     if(!empty($email) && !empty($password)) {
         $sql="select * from admin where email='$email' and password='$password'";
         if(mysqli_query($con,$sql))
         {
            echo"<script>alert('Admin Login Successfuly')</script>";
            echo "<script>window.open('addnewstudent.php','_self')</script>";
         } 
         else{
            echo"error:".mysqli_error($con);
         } 
     } else {
         echo"<script>alert('Email and password cannot be empty')</script>";
     }
     mysqli_close($con);   
}
?>
