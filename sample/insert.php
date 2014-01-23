<?php
$con=mysqli_connect("localhost","root","","music_sample");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO music_s(isrc, song_name, lyrics,rating,singer,movie_album)
VALUES
('$_POST[irsc]','$_POST[song]','$_POST[lyrics]','$_POST[rating]','$_POST[singer]','$_POST[movie]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Congrats , record succefully added by administator !! ";
echo '<embed height="0" width="0" src="record.wma">';
//echo'$_POST[irsc]','$_POST[song]','$_POST[singer]','$_POST[lyrics]','$_POST[rating]','$_POST[movie]';

mysqli_close($con);
?>