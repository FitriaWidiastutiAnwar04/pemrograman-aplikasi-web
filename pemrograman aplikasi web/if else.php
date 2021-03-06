<!DOCTYPE html>
<head>
<title>Statemen IF</title>
</head>
<body bgcolor="#87CEFA";
<body>
<body>
<form action="" method="post">
<label for="nilai">Nilai</label>
<input type="text" name="nilai" id="nilai">
<button type="submit" name="cek">cek </button>
</form>
<?php
// apakah tombol cek sudah ditekan
if (isset($_POST["cek"])){
	// menangkap nilai menggunakan variabel super global post
	$nilai = $_POST["nilai"];
	if($nilai==""){
		echo "<b><h1> Anda belum memasukkan nilai</h1> </b>"; 
	}elseif(!is_numeric($nilai)){
		echo "<b><h1> Ini bukan nilai angka</h1> </b>";
	}else{
		if ($nilai<=30){
			echo "<b><h1>Anda mendapat nilai huruf E</h1> </b>";
		}elseif($nilai<=50){
			echo "<b><h1>Anda mendapat nilai huruf D</h1> </b>";
		}elseif($nilai<=70){
			echo "<b><h1>Anda mendapat nilai huruf C</h1> </b>";
		}elseif($nilai<=85){
			echo "<b><h1>Anda mendapat nilai huruf AB</h1> </b>";
		}else{
			echo "<b><h1>Anda mendapat nilai huruf A</h1> </b>";
		}
	}
	}
?>
</body>
</html>