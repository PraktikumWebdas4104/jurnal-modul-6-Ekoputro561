<form method="POST" enctype="multipart/from-data">
<h2>REGISTRASI AKUN</h2>
	<table>
		<tr>
			<td>Nama</td>
			<td></td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td></td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td></td>
			<td><input type="radio" name="kelas" value="41-01">41-01
				<input type="radio" name="kelas" value="41-02">41-02
				<input type="radio" name="kelas" value="41-03">41-03
				<input type="radio" name="kelas" value="41-04">41-04</td>
			</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td></td>
			<td><input type="radio" name="jk" value="pria"> Pria <input type="radio" name="jk" value="wanita"> Wanita</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td></td>
			<td><input type="checkbox" name="hobi" value="Renang">Renang
				<input type="checkbox" name="hobi" value="Badminton">Badminton
				<input type="checkbox" name="hobi" value="Editing">Editting
				<input type="checkbox" name="hobi" value="Ngoding">Ngoding
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td></td>
			<td><select name="fak">
				<option value="-1"> >Pilih Fakultas</option>
				<option value="Fakultas Ekonomi Bisnis"> Fakultas Ekonomi Bisnis</option>
				<option value="Fakultas Komunikasi Bisnis"> Fakultas Komunikasi Bisnis</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
			</select></td>
		</tr>
			
		<tr>
			<td>Alamat</td>
			<td></td>
			<td><input type="textarea" name="alamat" length="35"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td></td>
			<td><input type="Password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td align="left"><input type="submit" name="Input" value="KIRIM"></td>
		</tr>


	</table>
	
</form>

<?php
	if(isset($_POST['Input'])) {
		include 'prosesregris.php';
	
}

  ?>
