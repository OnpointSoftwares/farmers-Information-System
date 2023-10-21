<?php
session_start();
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $femail = $_POST['femail'];
        $fpassword = $_POST['fpassword'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teamproject";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "select * from fdetails where femail='$femail' and fpassword='$fpassword'";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    $count=mysqli_num_rows($rs);
    if($count==1)
    {
        $_SESSION['login']=$femail;
         header("Location: activity/activity.php");

        exit();
    }
    else{
        echo "Wrong Password or email";
    }
  
    // close connection
    mysqli_close($con);

?>