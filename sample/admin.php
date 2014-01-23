<?php

 if(($_POST['Admin']=="Neetish" && $_POST['pwd']=="optimistic")||$_POST['Admin']=="Karthik" && $_POST['pwd']=="katya")
 {
echo'<div style="background-image:url(emoticon_I_love_music_6.jpg);padding:010px;width:900x;height:900px;border:0px solid black;">
<form action="hme.html" method="post">
<h2>WELCOME ADMINISTRATION   </h2><p>                                   <input type="submit" value="Log out" class="styled-button-2">      </p>       <br><br><br>
<a href="insert.html"><h2>INSERT</h2></a><br><br>
<a href="delete.html"><h2>DELETE</h2></a><br><br>
<a href="update.html"><h2>MODIFY</h2></a><br><br>
</div>  </form><embed height="0" width="0" src="ii.wma"><br>';

}
else
{
echo "wrong admin !! bye :) :) ";
}
?>
<style type="text/css"> 
.styled-button-2 {
	-webkit-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	color:#333;
	background-color:#FA2;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:none;
	font-family:'Helvetica Neue',Arial,sans-serif;
	font-size:16px;
	font-weight:700;
	height:32px;
	padding:4px 16px;
	text-shadow:#FE6 0 1px 0
}