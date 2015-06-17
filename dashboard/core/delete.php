<?php 
	//Admin Delete
	if (isset($_GET['admin-del'])) {
		$id 	=	$_GET['admin-del'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=admin '/>";
		}
	}
?>
<?php 
	//Guru Delete
	if (isset($_GET['guru-del'])) {
		$id 	=	$_GET['guru-del'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=guru '/>";
		}
	}
?>
<?php 
	//Siswa Delete
	if (isset($_GET['siswa-del'])) {
		$id 	=	$_GET['siswa-del'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=siswa '/>";
		}
	}
?>
<?php 
	//Kelas Delete
	if (isset($_GET['kelas-del'])) {
		$id 	=	$_GET['kelas-del'];

		$delete 	=	mysql_query("DELETE FROM kelas WHERE kelas_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=kelas '/>";
		}
	}
?>
<?php 
	//Tahun Ajaran Delete
	if (isset($_GET['tahun-del'])) {
		$id 	=	$_GET['tahun-del'];

		$delete 	=	mysql_query("DELETE FROM tahun WHERE tahun_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=tahun '/>";
		}
	}
?>
<?php 
	//Mata Pelajaran Delete
	if (isset($_GET['pelajaran-del'])) {
		$id 	=	$_GET['pelajaran-del'];

		$delete 	=	mysql_query("DELETE FROM pelajaran WHERE pelajaran_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=pelajaran '/>";
		}
	}
?>
<?php 
	//Data Sekolah Delete
	if (isset($_GET['sekolah-del'])) {
		$id 	=	$_GET['sekolah-del'];

		$delete 	=	mysql_query("DELETE FROM sekolah WHERE sekolah_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=sekolah '/>";
		}
	}
?>
<?php 
	//Modul Delete
	if (isset($_GET['modul-del'])) {
		$id 	=	$_GET['modul-del'];

		$delete 	=	mysql_query("DELETE FROM download WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?modul=download '/>";
		}
	}
?>
<?php 
	//Kategori Delete
	if (isset($_GET['kategori-del'])) {
		$id 	=	$_GET['kategori-del'];

		$delete 	=	mysql_query("DELETE FROM kategori WHERE kategori_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?artikel=kategori '/>";
		}
	}
?>
<?php 
	//Kategori Delete
	if (isset($_GET['artikel-del'])) {
		$id 	=	$_GET['artikel-del'];

		$delete 	=	mysql_query("DELETE FROM artikel WHERE artikel_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?artikel=list '/>";
		}
	}
?>
<?php 
	//Nilai Delete
	if (isset($_GET['nilai-del'])) {
		$id 	=	$_GET['nilai-del'];

		$delete 	=	mysql_query("DELETE FROM nilai WHERE nilai_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?nilai=tampil '/>";
		}
	}
?>