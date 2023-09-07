<?php
include 'database.php';
if(isset($_POST['signin']))
{
    $accounttype=$_POST['accounttype'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    // Check if a record with the same email and password already exists
    $sql="SELECT * FROM detail WHERE email='$email' AND password='$password'";
    $que=mysqli_query($con,$sql);
    if(mysqli_num_rows($que)>0)
    {
        // If a record with the same email and password already exists, update the selecttype value
        $sql = "UPDATE detail SET accounttype='$accounttype' WHERE email='$email' AND password='$password'";
        if(mysqli_query($con,$sql))
        {
            echo "<script>alert('Record updated successfully')</script>";
        }
        else
        {
            echo "Error: " . mysqli_error($con);
        }
    }
    else
    {
        // If no record with the same email and password exists, display a message
        echo "<script>alert('No record found with the given email and password')</script>";
    }
   mysqli_close($con);
}
?>
