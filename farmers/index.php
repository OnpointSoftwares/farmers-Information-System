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
$sql="select * from finfo where femail='$email'";
$query=mysqli_query($con,$sql);
$count=mysqli_num_rows($query);
if($count<1)
{
    header("Location:../fdetails.html");
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="" rel="stylesheet"  href="farmers/index.css" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ACTIVITY</th>
                                            <th>DATE</th>
                                            <th>CHECK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Spray Booster Foliar Fertilizer</a></td>
                                            <td>Pick date from db</td>
                                            <td>checkbox</td>
                                        </tr>
                                        <tr>
                                            <td>Inter-Row Weeding</a></td>
                                            <td>Pick from db</td>
                                            <td>checkbox</td>
                                        </tr>
                                        <tr>
                                            <td>Top Dress with Yara Mila Winner Fertilizer</a></td>
                                            <td>Pick from db</td>
                                            <td>checkbox</td>
                                        </tr>
                                        <tr>
                                            <td>Spray with Fluaziam against Late Blight</a></td>
                                            <td>Pick from db</td>
                                            <td>checkbox</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>