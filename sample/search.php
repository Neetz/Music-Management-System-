<?php
$con=mysqli_connect("localhost","root","","music_sample");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="SELECT * FROM music_s WHERE song_name LIKE '%$_POST[song]%'";
  $res=mysqli_query($con,$sql);
  
  echo "<table border='1'>
<tr>
<th>Isrc</th>
<th>Song-name</th>
<th>Singer</th>
<th>Rating</th>
<th>Singer</th>
<th>Movie/album</th>

</tr>";

while($row = mysqli_fetch_array($res))
  {
  echo "<tr>";
  echo "<td>" . $row['isrc'] . "</td>";
  echo "<td>" . $row['song_name'] . "</td>";
  echo "<td>" . $row['lyrics'] . "</td>";
  echo "<td>" . $row['rating'] . "</td>";
  echo "<td>" . $row['singer'] . "</td>";
  echo "<td>" . $row['movie_album'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

  
  ?>