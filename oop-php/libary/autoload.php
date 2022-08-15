<?php 
function __autoload($className){
   require once "library/$className.php";
}
$hpku = new Handphone();
$hpku -> isi_pulsa();
?>