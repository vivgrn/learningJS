<?php

$posted = &$_POST ;

$fname=$posted["file"];

if(strcmp($fname, "demo-post.txt") != 0) 
	die("You are not permitted to create this file.");

$value = $posted["content"];

$nfile = fopen($fname, "w");
if($nfile != false)
{
	fwrite($nfile, $value);
	fclose($nfile);
}	

?>
		
