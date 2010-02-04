<?php

function fileinfo($filename)
{
	if($filename == null)
	{
		die("No parameter...");
	}

	$pagedate = date ("D, d M Y H:i:s", filemtime($filename)) . " GMT";
	$pagesize = filesize($filename);
	$pagetype = filetype($filename);

	$fp = fopen("fileinfo.txt", 'w'); 
	if($fp == false)
		die("Enable to open fileinfo.txt for writing...");
	fwrite($fp, $pagedate."\n");
	fwrite($fp, $pagesize."\n");
	fwrite($fp, $pagetype."\n");
	fclose($fp); 
	
	$x = array();
	$x["date"] = $pagedate;
	$x["size"] = $pagesize;
	$x["type"] = $pagetype;
	return $x; 
}	
	

?>