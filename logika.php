
<?php
// if
$gol =20;

if ($gol >= 10) {
	echo "Mendali Emas Dengan Total Cetak Gol :  " .$gol;
	switch ($gol) {
		case "20":
	echo",Mendapatkan Bonus 100jt";
	break;
	}	
	}
elseif ($gol >=7) {
	echo "mendali perak dengan total cetal gol : " .$gol ;
	switch ($gol) {
		case "9":
		echo",mendapatkan bonus 80jt";
			break;
	}
}
elseif ($gol >= 4) {
	echo "mendali perunggu dengan total cetak gol : " .$gol;
	switch ($gol) {
		case "5":
		echo",mendapatkan bonus 50jt";
			break;
	}
}
else {
	echo "mendali emas ngambang dengan total cetak gol : " .$gol ;
	switch ($gol) {
		default:
		echo",tidak mendapatkan bonus";
			break;
	}	
}
?>