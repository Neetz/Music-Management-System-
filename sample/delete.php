<?php
$con=mysqli_connect("localhost","root","","music_sample");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//mysql_select_db("msuic_sample", $con);
  $sql="DELETE FROM music_s WHERE isrc='$_POST[irsc]'";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  else
  {
  echo " ok ";
  }
  
  ?>