<php
?>
<HTML>
<BODY>
<form action="insert.php" method="post">
IRSC: <input type="text" name="irsc" value="<?php echo '$_POST[irsc]';?>>
Song name: <input type="text" name="song">
Singer: <input type="text" name="age">
lyrics:<input type="text" name="lyrics">
rating:<input type="text"name="rating">
movie/album:<input type="text" name="movie">
<input type="submit">
</form>
<BODY>
</HTML