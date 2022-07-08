
<?php
session_start();
$con = mysqli_connect("localhost","root","","tata");

if(isset($_POST['submit']))
{
	$logemail = $_POST['logemail'];
	$logpassword = $_POST['logpassword'];

    $query = "INSERT INTO login(logemail,logpassword) VALUES ('$logemail','$logpassword')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: form1.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: form1.php");
    }
}
?>