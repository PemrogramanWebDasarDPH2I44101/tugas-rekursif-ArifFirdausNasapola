<form action=" " method="GET">
	masukkan angka: <input type="text" name="nilai">
	<input type="submit" name="submit" value="tampil">
	</form>

	<?php
	if (isset($_GET['submit'])) {
echo "<br>";	
function segitiga($baris, $col, $batas){
		$batas= $_GET['nilai'];

	if ($baris = $batas){

		if($col = $baris){
			echo("*");
		}
		if($col = $baris){
			echo ("<br>");
			segitiga(--$baris, 1, $batas);
		}else{
			segitiga($baris, --$col, $batas);
		}
	}
}
		segitiga(1,1,10);
	}
?>
