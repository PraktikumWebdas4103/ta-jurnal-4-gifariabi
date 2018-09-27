<form action=" " method="post">
	<center>
		<h1>MARI MEMILIH</h1>
	<table>
		<tr>
			<td>Genre Film :</td>
		</tr>
		 <tr>
		 	<td><input type="checkbox" name="data[]" value="Action">Action</td>
		 </tr>
		<tr>
			<td><input type="checkbox" name="data[]" value="Horror">Horror</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="data[]" value="Anime">Anime</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="data[]" value="Thriller">Thriller</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="data[]" value="Animasi">Animasi<br></td>
		</tr>
		<tr>
			<td>Tempat Wisata Tujuan : </td>
		</tr>
		<tr>
			<td><input type="checkbox" name="data1[]" value="Bali">Bali</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="data1[]" value="Raja Ampat">Raja Ampat</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="data1[]" value="Pulau Derawan">Pulau Derawan</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="data1[]" value="Bangka Belitung">Bangka Belitung</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="data1[]" value="Labuan Bajo">Labuan Bajo<br></td>
		</tr>
		<tr>
			<td>Upload Foto : </td>
		</tr>
		<tr>
			<td><input type="file" name="foto[]"></td>
		</tr>
		<tr>
			<td><br><input type="submit" name="submit" value="Kirim"></td>
		</tr>
	</table>
</center>
</form>
<?php
	if (isset($_POST['submit'])) {
		$gambar = $_POST['foto'];
		$genre = $_POST['data'];
		$wisata = $_POST['data1'];
	}
	?>
<?php	
	if (isset($_POST['submit'])) {
		for ($i=0; $i < count($genre); $i++) { 
			echo "$genre[$i]".",";
		}
		echo "<br>";
		for ($a=0; $a < count($wisata); $a++) { 
			echo "$wisata[$a]".",";
		}

		
		echo "<br>".$gambar[0];
		echo "<img src='<?php echo $gambar[0]; ?>' height='200' width='200'>";
		
		
		
	}
	?>
