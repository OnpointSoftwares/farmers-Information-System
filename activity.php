<html>

<head>

//css

<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php

$con = mysqli_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

 

mysqli_select_db($con,"teamproject");

 

$result = mysqli_query("SELECT * FROM finfo where fdate='$fdate'");

 

echo "<table border='1'>

<tr>

<th>Id</th>

<th>name</th>

<th>Mobile</th>

<th>email</th>

</tr>";

 

while($fdate = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $fdate['Id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['Mobile'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>

</body>

</html>