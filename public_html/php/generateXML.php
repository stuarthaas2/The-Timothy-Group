<?php

$path = "images/splash/";

$dir_handle = @opendir($path) or die("Unable to open $path");

$filetypes = array("jpg", "png");

$doc = new DOMDocument('1.0');

$doc->formatOutput = true;

$root = $doc->createElement('gallery');
$root = $doc->appendChild($root);
$root->setAttribute('type', 'array');
$root->setAttribute('columns', '22');

while($file = readdir($dir_handle)){
	
	$file = rawurlencode($file);
	
	$split = explode(".", $file);

	$ext = strtolower($split[count($split)-1]);
	
	if(in_array($ext, $filetypes)){
		
		$item = $doc->createElement('image');
		$item = $root->appendChild($item);
		
		$file = $path.$file;
		
		$source = $doc->createElement('source');
		$source = $item->appendChild($source);
		$source->nodeValue = $file;
	}
}

closedir($dir_handle);

$doc->save("splash.xml");
echo "File generated";

?>