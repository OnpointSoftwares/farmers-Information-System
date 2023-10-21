<?php
session_start();
$email=$_SESSION['login'];
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
$sql1="select * from finfo where femail='$email'";
$query=mysqli_query($con,$sql1);
$count=mysqli_num_rows($query);
if($count<1)
{
    header("Location:../fdetails.html");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #4070f4;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #4070f4;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
.button {
  background-color: #4070f4;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<table>
<tr>
<th>ACTIVITY</th>
<th>DATE</th>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teamproject";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email=$_SESSION['login'];
$sql = "SELECT * FROM finfo where femail='$email'";
$result = $conn->query($sql);
$row=mysqli_fetch_assoc($result);

if ($result->num_rows > 0) {
  // output data of each row
  $startdate = strtotime($row['fdate']);
  $plant=$row['fcrop'];
  if($plant=="maize")
  {
 ?>
    <tr><td>Spray Booster Foliar Fertilizer</td><td><?php $startdates = strtotime("+2 week", $startdate);
  echo date("M d", $startdates) . "<br>";?></td></tr>
    <tr><td>Inter-Row Weeding</td><td><?php $startdates = strtotime("+4 week", $startdate);
  echo date("M d", $startdates) . "<br>";?></td></tr>
    <tr><td>Top Dress with Yara Mila Winner Fertilizer</td><td><?php $startdates = strtotime("+6 week", $startdate);
  echo date("M d", $startdates) . "<br>";?></td></tr>
    <tr><td>Spray with Fluaziam against Late Blight</td><td><?php $startdates = strtotime("+8 week", $startdate);
  echo date("M d", $startdates) . "<br>";?></td></tr>
    <?php
  }
  else if($plant=="wheat")
  {
    ?>
    <tr><td>Spray Booster Foliar Fertilizer</td><td><?php $startdates = strtotime("+2 week", $startdate);
  echo date("M d", $startdates) . "<br>";?></td></tr>
    <tr><td>Inter-Row Weeding</td><td><?php $startdates = strtotime("+4 week", $startdate);
  echo date("M d", $startdates) . "<br>";?></td></tr>
    <tr><td>Top Dress with Yara Mila Winner Fertilizer</td><td><?php $startdates = strtotime("+6 week", $startdate);
  echo date("M d", $startdates) . "<br>";?></td></tr>
    <tr><td>Spray with Fluaziam against Late Blight</td><td><?php $startdates = strtotime("+8 week", $startdate);
  echo date("M d", $startdates) . "<br>";?></td></tr>
    <?php
  }
} else {
  echo "0 results";
  header("location:../fdetails.html");
}
$conn->close();
?>
</table>
<center>
<a class="button" href="../weather/">Weather</a></br>
<a class="button" href="logout.php">Logout</a>
</center>
</body>
</html>