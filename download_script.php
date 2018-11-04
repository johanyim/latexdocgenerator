<?
	
//	
//	$tmpName = tempnam(sys_get_temp_dir(), 'data');
//	$file = fopen($tmpName, 'w');
//	
	
	header('Content-type: text/plain');
	header('Content-disposition: attachment;
	filename=data.txt');
	readfile('data.txt');
?>