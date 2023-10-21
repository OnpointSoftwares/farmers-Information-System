<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $femail = $_POST['femail'];
        $fnumber = $_POST['fnumber'];
        $fgender = $_POST['fgender'];
        $fdate=$_POST['fdate'];
        $fcrop=$_POST['fcrop'];
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
    $sql = "INSERT INTO finfo (fname, femail, fnumber,fcrop, fgender,fdate) VALUES ('$fname', '$femail', '$fnumber','$fcrop', '$fgender','$fdate')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
         header("location:activity/activity.php");
        exit();
    }
  
    // close connection
    mysqli_close($con);
    }
?>