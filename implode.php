<?php 
	echo "<h3 align = 'center'>Nama : M Thariqulhaq Ikramullah [12171598]</h3>";
	echo "<hr width='50%' align='center'/>";
	//contoh implode 1
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
	
	echo "<br/>"."<br/>";
	echo "HASIL IMPLODE";
	echo "<br/>";
	echo implode(" ",$kata);
	
	echo "<br/>";
	echo "<hr width='50%' align='left'/>";
	echo "<br/>";

	//contoh implode 2
	$hobi = "Musik, Gitar, Desain_Grafis, Ngegame, Nonton";
	print_r ($hobi);
	$myhobies = explode(",", $hobi);
	echo "<pre>";
	print_r($myhobies);
	
	echo "<br/>"."<br/>";
	echo "HASIL IMPLODE";
	echo "<br/>";
	echo implode(",",$myhobies);
	
	echo "<br/>";
	echo "<hr width='50%' align='left'/>";
	echo "<br/>";
	
	
	
	//contoh implode 3
	
	echo "Deadline"."<br/>"."<br/>";
	$hari_tanggal = array("Hari"=>"Senin",
						"Tanggal"=>"25",
						"Bulan"=>"Maret",
						"Tahun"=>"2019");
	print_r($hari_tanggal);
	$tanggal = implode(" ", $hari_tanggal);
	echo "<pre>";
	print_r($tanggal);
	echo"</pre>";
	
	echo "<br/>";
	echo "<hr width='50%' align='left'/>";
	echo "<br/>";
	
	
	//contoh implode 4
	$sentence = "She studies English everyday";
	//print_r($sentence);
	echo "<br/>";
 
	$data = explode(" " , $sentence);
 
	//print_r($data);
 
	
	echo " subject = " . $data[0];
	echo "<br/>";
	echo " verb 1 = " . $data[1];
	echo "<br/>";
	echo " object = " . $data[2];
	echo "<br/>";
	echo " adverb = " . $data[3];
	
	
	echo "<br/>"."<br/>";
	echo "IMPLODE";
	echo "<br/>";
	echo implode(" ",$data);
	
	echo "<br/>";
	echo "<hr width='50%' align='left'/>";
	echo "<br/>";
	
	// Contoh Implode 5
	echo "Waktu"."<br>"."<br>";
	$jam = array("Jam"=>"08",
				 "Menit"=>"49",
				 "Detik"=>"30");
	print_r($jam);
	$waktu = implode(":", $jam);
	echo '<pre>';print_r($waktu);echo'</pre>';
	
	echo "<br/>";
	echo "<hr width='50%' align='left'/>";
	echo "<br/>";
	
	
	
?>