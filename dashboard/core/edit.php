<?php
	//Admin Edit 
	if (isset($_GET['admin-edit'])) {
		$id 	=	$_GET['admin-edit'];

		if (isset($_POST['admin-update'])) {
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$status 	=	$_POST['status'];
			$alamat 	=	$_POST['alamat'];
			$kelamin 	=	$_POST['jenis_kelamin'];

			$admin 		=	mysql_query("UPDATE users 
											SET `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat', `status` = '$status', `jenis_kelamin` = '$kelamin'
											WHERE id = '$id'");
			if ($admin) {
				echo "<meta http-equiv='refresh' content='0;URL=?users=admin'>";
			}
		}

		$dataadmin 		= 	mysql_query("SELECT * FROM users WHERE id=$id");
		$row 			= 	mysql_fetch_array($dataadmin);
	}
?>
<?php 
	//Guru Edit
	if (isset($_GET['guru-edit'])) {
		$id 	=	$_GET['guru-edit'];

		if (isset($_POST['guru-update'])) {
			$nip 		=	$_POST['nip'];
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$status 	=	$_POST['status'];
			$alamat 	=	$_POST['alamat'];
			$kelamin 	=	$_POST['jenis_kelamin'];
			$kelas 		=	$_POST['kelas'];

			$guru 		=	mysql_query("UPDATE users 
											SET `nomor_induk` = '$nip', `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat', `status` = '$status', `jenis_kelamin` = '$kelamin', `kelas_id` = '$kelas'
											WHERE id = '$id'");
			if ($guru) {
				echo "<meta http-equiv='refresh' content='0;URL=?users=guru'>";
			}
		}

		$dataguru		= 	mysql_query("SELECT *, kelas.kelas_nama FROM users INNER JOIN kelas ON users.kelas_id=kelas.kelas_id WHERE id=$id");
		$row 			= 	mysql_fetch_array($dataguru);
	}
?>
<?php 
	//Siswa Edit
	if (isset($_GET['siswa-edit'])) {
		$id 	=	$_GET['siswa-edit'];

		if (isset($_POST['siswa-update'])) {
			$nis 		=	$_POST['nis'];
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$status 	=	$_POST['status'];
			$alamat 	=	$_POST['alamat'];
			$kelamin 	=	$_POST['jenis_kelamin'];
			$kelas 		=	$_POST['kelas'];

			$siswa 		=	mysql_query("UPDATE users 
											SET `nomor_induk` = '$nis', `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat', `status` = '$status', `jenis_kelamin` = '$kelamin', `kelas_id` = '$kelas'
											WHERE id = '$id'");
			if ($siswa) {
				echo "<meta http-equiv='refresh' content='0;URL=?users=siswa'>";
			}
		}

		$datasiswa		= 	mysql_query("SELECT *, kelas.kelas_id, kelas.kelas_nama FROM users INNER JOIN kelas ON users.kelas_id=kelas.kelas_id WHERE id=$id");
		$row 			= 	mysql_fetch_array($datasiswa);
	}
?>
<?php 
	//Kelas Edit
	if (isset($_GET['kelas-edit'])) {
		$id 	=	$_GET['kelas-edit'];

		if (isset($_POST['kelas-update'])) {
			$kelasnama 	=	$_POST['kelas'];

			$kelas 		=	mysql_query("UPDATE kelas SET `kelas_nama` = '$kelasnama' WHERE kelas_id = '$id'");
			if ($kelas) {
				echo "<meta http-equiv='refresh' content='0;URL=?akademik=kelas'>";
			}
		}

		$datakelas		= 	mysql_query("SELECT * FROM kelas WHERE kelas_id=$id");
		$row 			= 	mysql_fetch_array($datakelas);
	}
?>
<?php 
	//Tahun Ajaran Edit
	if (isset($_GET['tahun-edit'])) {
		$id 	=	$_GET['tahun-edit'];

		if (isset($_POST['tahun-update'])) {
			$tahunnama 	=	$_POST['tahun'];

			$tahun 		=	mysql_query("UPDATE tahun SET `tahun_nama` = '$tahunnama' WHERE tahun_id = '$id'");
			if ($tahun) {
				echo "<meta http-equiv='refresh' content='0;URL=?akademik=tahun'>";
			}
		}

		$datatahun		= 	mysql_query("SELECT * FROM tahun WHERE tahun_id=$id");
		$row 			= 	mysql_fetch_array($datatahun);
	}
?>
<?php 
	//Mata Pelajaran Edit
	if (isset($_GET['pelajaran-edit'])) {
		$id 	=	$_GET['pelajaran-edit'];

		if (isset($_POST['pelajaran-update'])) {
			$pelajarannama 	=	$_POST['pelajaran'];

			$pelajaran 		=	mysql_query("UPDATE pelajaran SET `pelajaran_nama` = '$pelajarannama' WHERE pelajaran_id = '$id'");
			if ($pelajaran) {
				echo "<meta http-equiv='refresh' content='0;URL=?akademik=pelajaran'>";
			}
		}

		$datapelajaran	= 	mysql_query("SELECT * FROM pelajaran WHERE pelajaran_id=$id");
		$row 			= 	mysql_fetch_array($datapelajaran);
	}
?>
<?php 
	//Kategori Edit
	if (isset($_GET['kategori-edit'])) {
		$id 	=	$_GET['kategori-edit'];

		if (isset($_POST['kategori-update'])) {
			$kategorinama 	=	$_POST['nama'];
			$kategorideskripsi 	=	$_POST['deskripsi'];

			$kategori 		=	mysql_query("UPDATE kategori SET `kategori_nama` = '$kategorinama', `kategori_deskripsi` = '$kategorideskripsi' WHERE kategori_id = '$id'");
			if ($kategori) {
				echo "<meta http-equiv='refresh' content='0;URL=?artikel=kategori'>";
			}
		}

		$datakategori	= 	mysql_query("SELECT * FROM kategori WHERE kategori_id=$id");
		$row 			= 	mysql_fetch_array($datakategori);
	}
?>
<?php 
	//Data Sekolah Create
	if (isset($_GET['sekolah-edit'])) {
		$id 	=	$_GET['sekolah-edit'];

		if (isset($_POST['sekolah-update'])) {
			$nama		=	$_POST['nama'];
			$alamat		=	$_POST['alamat'];
			$telp		=	$_POST['telp'];
			$visi		=	$_POST['visi'];
			$misi		=	$_POST['misi'];

			$sekolah 	= 	mysql_query("UPDATE sekolah 
										SET `sekolah_nama` = '$nama', `sekolah_alamat` = '$alamat', `sekolah_telp` = '$telp', `sekolah_visi` = '$visi', `sekolah_misi` = '$misi' 
										WHERE sekolah_id = '$id'");

			if ($sekolah) {
				echo "<meta http-equiv='refresh' content='0;URL=?akademik=sekolah'>";
			}
		}

		$datasekolah 	=	mysql_query("SELECT * FROM sekolah WHERE sekolah_id=$id");
		$row 			=	mysql_fetch_array($datasekolah);
	}
?>
<?php 
	//Nilai Edit
	if (isset($_GET['nilai-edit'])) {
		$id 	=	$_GET['nilai-edit'];

		if (isset($_POST['nilai-update'])) {
			$kkm 		=	$_POST['kkm'];
			$nilaipoin 	=	$_POST['poin'];

			$nilai 		=	mysql_query("UPDATE nilai SET `nilai_kkm` = '$kkm', `nilai_poin` = '$nilaipoin' WHERE nilai_id = '$id'");
			if ($nilai) {
				echo "<meta http-equiv='refresh' content='0;URL=?nilai=tampil'>";
			}
		}

		$datanilai	= 	mysql_query("SELECT * FROM nilai WHERE nilai_id=$id");
		$row 			= 	mysql_fetch_array($datanilai);
	}
?>
<?php 
	//Data Sekolah Create
	if (isset($_GET['artikel-edit'])) {
		$id 	=	$_GET['artikel-edit'];

		if (isset($_POST['update-artikel'])) {
			$judul		=	$_POST['judul'];
			$isi		=	$_POST['isi'];
			$kategori		=	$_POST['kategori'];

			$artikel 	= 	mysql_query("UPDATE artikel
										SET `artikel_judul` = '$judul', `artikel_isi` = '$isi', `artikel_tgl` = now(), `kategori_id` = '$kategori' 
										WHERE artikel_id = '$id'");

			if ($artikel) {
				echo "<meta http-equiv='refresh' content='0;URL=?artikel=list'>";
			}
		}

		$dataartikel 	=	mysql_query("SELECT * FROM artikel WHERE artikel_id=$id");
		$row 			=	mysql_fetch_array($dataartikel);
	}
?>
<?php 
	// Profile
	if (isset($_GET['profile'])) {
		$id 	=	$_GET['profile'];

		$dataprofile 	=	mysql_query("SELECT * FROM users WHERE id=$id");
		$row 			=	mysql_fetch_array($dataprofile);
	}
?>
<?php 
	// Profile
	if (isset($_GET['change'])) {
		$id 	=	$_GET['change'];

		if (isset($_POST['change'])) {
			$new		=	$_POST['new'];

			$password 	= 	mysql_query("UPDATE users 
										SET `password` = '$new'
										WHERE id = '$id'");

			if ($password) {
				echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
			}
		}

		$datapassword 	=	mysql_query("SELECT * FROM users WHERE id=$id");
		$row 			=	mysql_fetch_array($datapassword);
	}
?>