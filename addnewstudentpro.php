<?php
include 'database.php';
if(isset($_POST['addstudent']))
{    

   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
    $phoneno=$_POST['phoneno'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $confirmpass=$_POST['confirmpass0'];


     $sql="insert into detail(firstname,lastname,email,phonenumber,password)values('$firstname','$lastname','$email','$phoneno','$password')";


     if(mysqli_query($con,$sql))
     {
        echo"<script>alert('new record inserted')</script>";
     } 
     else{
        echo"error:".mysqli_error($con);
     } 
     mysqli_close($con);   
}

?>