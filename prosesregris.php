<?php 
error_reporting(0);
	
	include 'koneksi.php';
	
		if (isset($_POST['Input'])) {
			include('koneksi.php');
			
			if ($koneksi) {
				$nama 		= $_POST['nama'];
				$nim  		= $_POST['nim'];
				$kelas		= $kelas['kelas'];
				$jk			= $_POST['jk'];
				$hobi		= $_POST['hobi'];
				$fakultas	= $_POST['fak'];
				$prodi		= $_POST['prodi'];
				$alamat		= $_POST['alamat'];
				$pass 		= $_POST['pass'];
				
				

				
				$query  =mysqli_query($koneksi, "SELECT * FROM mhs WHERE nim='$nim'");
				$row	=mysqli_fetch_array($query);


				if (isset($hobi)) {
	  					
		  					if ($fakultas == -1) {
		  					echo "<b>ERROR : </b>FAKULTAS Tidak Boleh Kosong";
			  				}
			  				else{
			  					if ($prodi == -1) {
			  					echo "<b>ERROR : </b>Program Studi Tidak Boleh Kosong";
			  					}
				  				else{
				  					if (!isset($jk)) {
				  					echo "<b>ERROR : </b>Jenis Kelamin Tidak Boleh Kosong";
				  					}
					  				else{
						  				if (!empty($pass)) {
						  					
						  						if (!empty($nama)) {
						  							if (!empty($nim)) {
									  					if (strlen($nim)<=10) {
										  					if (is_numeric($nim) == TRUE) {
										  						if (strlen($nama)<=35) {
										  							if (preg_match("/^[a-zA-Z ]*$/",$nama)) {
										  								
										  									if ($nim !== $row['nim']) {
										  										
										  										$sql = $koneksi->query("
										  											INSERT INTO `mhs` (`nama`, `nim`, `kelas`, `jk`, `hobi`, `fakultas`, `prodi`, `alamat`, `password`)
										  											VALUES ('$nama', '$nim', '$kelas', '$jk', '$hobi', '$fakultas', '$prodi', '$alamat', '$pass')
										  															 ");
										  										echo "REGISTRASI SUKSES - Silahkan <a href='login.php'>LOGIN</a>";
										  									
										  									}
												  									else{
												  										echo "<b>ERROR : </b>NIM Sudah Ada";
												  									}
												  								
												  							}
												  							else{
												  								echo "<b>ERROR : </b>NAMA Harus Karakter Huruf";
												  							}
												  						}
												  						else{
												  							echo "<b>ERROR : </b>Panjang NAMA Tidak Boleh Lebih dari 35 Digit";
												  						}
												  					}
												  					else{
												  						echo "<b>ERROR : </b>NIM Harus Karakter Angka";
												  					}
												  				}
												  				else{
												  					echo "<b>ERROR : </b>Panjang NIM Tidak Boleh Lebih dari 10 Digit";
												  				}
											  				}
											  				else{
											  					echo "<b>ERROR : </b>NIM Tidak Boleh Ada Yang Kosong";
											  				}
								  						}
								  						else{
								  							echo "<b>ERROR : </b>NAMA Tidak Boleh Kosong";
								  						}

								  				}
								  				else{
								  					echo "<b>ERROR : </b>PASSWORD Tidak Boleh Kosong";
								  				}
								  			}
						  				}
					  				}
				  				
			  				}
			  				else{
			  					echo "<b>ERROR : </b>HOBI Harus Di Pilih";
			  				}
			  			}
			  			else{
			  				echo "<b>ERROR : </b>REGISTRASI GAGAL";
			  			}
			  		}

						
					
?> 