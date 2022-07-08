
<?php
session_start();
$con = mysqli_connect("localhost","root","","dan");

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$conpassword = $_POST['conpassword'];

    $query = "INSERT INTO com (email,password,conpassword) VALUES ('$email','$password','$conpassword')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location:form1.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: form1.php");
        echo("Register NoW !!!.");
    }
}
?>