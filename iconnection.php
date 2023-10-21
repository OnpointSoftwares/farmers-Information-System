<?php
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
    $sql = "INSERT INTO fdetails (femail, fpassword) VALUES ('$femail', '$fpassword')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
         header("Location: login.html");

        exit();
    }
  
    // close connection
    mysqli_close($con);

?>