<?php 
function __autoload($className){
   require once str replace("\\", "/", $className).".php";
}
use library/Smartphone;
class HPBaru extends Smartphone{
}

$hpku = new HPBaru();
$hpku -> kirim_pesan();
?>