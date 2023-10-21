<?php
header("Refresh:10");
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;
$conn=mysqli_connect("localhost","root","","teamproject");
$sql="select * from finfo";
$query=mysqli_query($conn,$sql);
$text="";
while($row=mysqli_fetch_assoc($query)){
    $startdate = strtotime($row['fdate']);
    $number=$row['fnumber'];
    $num="+254".$number;
   $pdate=$row['fdate'];
    $text="Spray Booster Foliar Fertilizer:".$startdate=strtotime("+2 week", $startdate).date("M d", $startdate)."Inter-ROw Weeding:".$startdate=strtotime("+4 week", $startdate).date("M d", $startdate)."Top Dressing:".strtotime("+2 week", $startdate);

$username = 'finfoS'; // use 'sandbox' for development in the test environment
$apiKey   = '5788a34b8a7e77c87edbf6e7e810a2a21fcd5a31fde02bd95df23eea4ca758ae'; // use your sandbox app API key for development in the test environment
$AT       = new AfricasTalking($username, $apiKey);

// Get one of the services
$sms      = $AT->sms();

// Use the service
$result   = $sms->send([
    'to'      => $num,
    'message' => $text
]);
}
print_r("Weekly Updates Successful");

?>