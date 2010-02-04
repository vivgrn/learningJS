<?php
	include_once("fileinfo.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Demo of file info in Ajax with the PHP extension of Anaa</title>
</head>

<body bgcolor="#FFFFFF">

<script src="anaa.js" type="text/javascript"></script>
<script language="JavaScript">

	function submitForm(url)
	{ 
		var xhr=AACreate();

		xhr.onreadystatechange=function()
		{ 
			if(xhr.readyState == 4)
			{
				var h = xhr.getAllResponseHeaders();
				document.getElementById("zone").innerHTML = "Headers:<br/>";
				document.getElementById("zone").innerHTML += h;	
			} 
		}; 

		xhr.open("HEAD", url, true);
		xhr.send(null); 
	} 
</script>


<h1>File Info Extension Demo</h1>
Call a script, actually included in this page with a filename as parameter. The 
PHP script retrieves essential infos about the file and display them below in 
this page. 
<FORM name="ajax" method="POST" action="">
  <blockquote> 
    <p>
      <input type="text" name="filename" value="demo-fileinfo.php">
      <INPUT type="submit" value="Get Infos">
    </p>
  </blockquote>
</FORM>

<div id="zone">
</div>

	
<p>
<?php

	echo "File $filename<br><br>";

	$x = fileinfo($filename);
	print_r($x);

?>
</p>

<p>(c) 2007 <a href="http://www.anaa.eu" target="_parent">Anaa.eu</a></p>


</body>
</html>
