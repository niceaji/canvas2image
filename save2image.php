<?php 
// http://niceaji.allalla.com/save2image/

header('Access-Control-Allow-Origin: *');

$data  = $_POST['data'];

$filename = "test"; 
$filename .= ".png";

//파일로 저장!
file_put_contents($filename, base64_decode($data)); 

echo $filename;
?>