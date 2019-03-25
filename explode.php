<?php 
	echo "<h3 align = 'center'>Nama : M Thariqulhaq Ikramullah [12171598]</h3>";
	echo "<hr width='50%' align='center'/>";
	//contoh explode 1
	$kalimat = "nama saya M Thariqulhaq Ikramullah";
	print_r($kalimat);
	echo "<br/>";
 
	$kata = explode(" " , $kalimat);
 
	print_r($kata);
 
	echo "<br/>";
	echo "<br/>";
 
	echo " kata ke 1 = " . $kata[0];
	echo "<br/>";
	echo " kata ke 2 = " . $kata[1];
	echo "<br/>";
	echo " kata ke 3 = " . $kata[2];
	echo "<br/>";
	echo " kata ke 4 = " . $kata[3];
	echo "<br/>";
	echo " kata ke 5 = " . $kata[4];
 
	
	echo "<br/>";
	echo "<hr width='50%' align='left'/>";
	echo "<br/>";

	//contoh explode 2
	$hobi = "Musik, Gitar, Desain_Grafis, Ngegame, Nonton";
	print_r ($hobi);
	$myhobys = explode(",", $hobi);
	echo "<pre>";
	print_r($myhobys);
	echo "</pre>";
	echo "<hr width='50%' align='left'/>";
	echo "<br/>";
	
	//contoh explode 3
	$date="2019-03-25";
	print_r($date);
	$tgl = explode("-", $date);
	echo "<pre>";
	print_r($tgl);
	echo"</pre>";
	$year=$tgl[0];
	$month=$tgl[1];
	$date=$tgl[2];
	
	echo $date."-".$month."-".$year."<br>";
	echo "<br/>";
	echo "<hr width='50%' align='left'/>";
	echo "<br/>";
	
	
	//contoh explode 4
	$time = "17:01:00";
	print_r($time);
	$times = explode(":", $time);
	echo"<pre>";
	print_r($times);
	echo"</pre>";
	
	echo "<br/>";
	echo "<hr width='50%' align='left'/>";
	echo "<br/>";
	
	//contoh explode 5
	$bulan = "janurai februari maret april mei juni juli agustus september oktober november desember";
	$pisah = explode(' ',$bulan);
	foreach ($pisah as $value){
		echo $value."<br/>";
	}
	
	echo "<br/>";
	echo "<hr width='50%' align='left'/>";
	echo "<br/>";
?>