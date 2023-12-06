<?php
$filename = "myfile.txt";

// Read
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
echo var_dump($contents) . "<br>";
fclose($handle);

// Write
$fp = fopen($filename, 'w');
fwrite($fp, 'hello ');
fwrite($fp, 'php file');
fclose($fp);
echo "File written successfully" . "<br>";

// Read
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
echo var_dump($contents) . "<br>";
fclose($handle);

// Delete
// unlink($filename);