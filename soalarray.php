<?php

$arrNilai  = array("Ajeng" =>90,"Mamet" => 70,"Ucup" =>87,"Aang"=>95,"Syahrul"=>75 );
foreach ($arrNilai as $nama => $nilai) {
	 
if ($nilai > 85){
  echo "Nama: $nama, Nilai : $nilai, Grade A <br>";
 
  } 
  elseif ($nilai > 75){
  	echo "Nama : $nama, Nilai : $nilai, Grade B <br>";
}
elseif($nilai > 65){
	echo "Nama : $nama, Nilai : $nilai, Grade C <br>";
}
echo "<hr>";
}
?>