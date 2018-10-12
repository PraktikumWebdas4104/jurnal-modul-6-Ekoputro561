<form method="POST">
	<h1>Login Akun</h1>
	<table>
		<tr>
			<td>NIM</td>
			<td></td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td></td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Login"> &nbsp;<a href="regristrasi.php"> Registrasi</a></td>
		</tr>
	</table>
</form>

<?php
 	if (isset($_POST['submit'])) {
 		session_start();
 			
 			include 'koneksi.php';

 			$nim = $_POST['nim'];
 			$pass= $_POST['pass'];

 			$sql = "SELECT nim, password FROM mhs WHERE nim ='$nim'";
 			$qry = mysqli_query($koneksi,$sql);
 			$row = mysqli_fetch_array($qry);

 			if ($nim == $row['nim']) {
 				if ($pass == $row['password']) {
 					$_SESSION["berhasil_login"]=1;
 					$_SESSION["nim"]=$row['nim'];
 					$_SESSION["password"]=$row['password'];
 					echo "<h2>Login Sukses</h2>";
 				}
 				else{
 					echo "Password Salah";
 				}
 				
 			}
 			else{
 				echo "Nim Salah";
 			}
 		}	

	?>