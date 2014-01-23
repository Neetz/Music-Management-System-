<?php
$con=mysqli_connect("localhost","root","","music_sample");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM music_s");

echo "<table border='1'>
<tr>
<th>Iscr</th>
<th>Song-name</th>
<th>Singer</th>
<th>Rating</th>
<th>Singer</th>
<th>Movie/album</th>

</tr>";

while($row = mysqli_fetch_array($result))
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

mysqli_close($con);
?>