<?php

function get_link($query)
{
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, 'http://www.bing.com/images/async?q='.urlencode($query).'&first=1&count=12&relp=35&lostate=r&mmasync=1'); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, true);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$output = curl_exec($ch);
	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	print_r($http_code);
	print_r("\n");
	return urldecode($output);
}

function process_image($query)
{
	$output = get_link($query);
	preg_match_all('/mediaurl=(.*?)&amp/s',$output,$image_list);
	$ser = serialize($image_list[1]);
	file_put_contents('result/'.$query.'.rahasia', $ser);
}

$file = fopen("keywords.txt","r");
while(!feof($file)){
	$line = fgets($file);
	$line = rtrim($line);
	print_r($line);
	print_r(" - ");
	process_image($line);
}
fclose($file);




