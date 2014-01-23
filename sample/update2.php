<?php
$con=mysqli_connect("localhost","root","","music_sample");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//mysql_select_db("msuic_sample", $con);
  $sql="UPDATE music_s SET song_name='$_POST[song]',lyrics='$_POST[lyrics]',rating='$_POST[rating]',singer='$_POST[singer]',movie_album='$_POST[movie]'
WHERE isrc='$_POST[irsc]'";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Congrats , record succefully Updated by administator !! ";
  
//mysql_query("UPDATE music_s SET song_name='$_POST[song]',lyrics='$_POST[lyrics]',rating='$_POST[rating]',singer='$_POST[singer]',movie_album='$_POST[movie]''
//WHERE isrc='$_POST[irsc]'");
mysqli_close($con);
?>