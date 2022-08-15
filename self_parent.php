<?php 
class handphone{
   public function tampil_pesan_handphone(){
      echo self::tampil_pesan();
      echo $this->tampil_pesan();
   }
   
   public function tampil_pesan(){
      return "ini perangkat Handphone";
   }
}

class smartphone extends handphone{
   public function tampil_pesan_smartphone(){
      echo parent::tampil_pesan();
      echo $this->tampil_pesan();
   }

   public function tampil_pesan(){
      return " Jenis Smartphone";
   }
}

$hp_halika = new smartphone();

$hp_halika->tampil_pesan_handphone();
echo "<br>";
$hp_halika->tampil_pesan_smartphone();
?>