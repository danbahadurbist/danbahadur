
<?php
session_start();
$con = mysqli_connect("localhost","root","","bata");

if(isset($_POST['submit']))
{
	$foremail = $_POST['foremail'];

    $query = "INSERT INTO forgotform(foremail) VALUES ('$foremail')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: index.html");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location:index.html");
    }
}
?>