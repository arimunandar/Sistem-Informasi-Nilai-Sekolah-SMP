<?php 
	//Admin Create
	if (isset($_POST['create-admin'])) {
		$username 	=	$_POST['username'];
		$password 	=	$_POST['password'];
		$name 		=	$_POST['name'];
		$telp 		=	$_POST['telp'];
		$status 	=	$_POST['status'];
		$alamat 	=	$_POST['alamat'];
		$kelamin 	=	$_POST['jenis_kelamin'];

		$admin 		= 	mysql_query("INSERT INTO users (`id`, `nomor_induk`, `name`, `username`, `password`, `telp`, `alamat`, `status`, `jenis_kelamin`, `kelas_id`, `access`) 
									VALUES (NULL, NULL, '$name', '$username', '$password', '$telp', '$alamat', '$status', '$kelamin', NULL, 'admin')");

		if ($admin) {
			echo "<meta http-equiv='refresh' content='0;URL=?users=admin'>";
		}
	}
?>
<?php 
	//Guru Create
	if (isset($_POST['create-guru'])) {
		$nip	 	=	$_POST['nip'];
		$username 	=	$_POST['username'];
		$password 	=	$_POST['password'];
		$name 		=	$_POST['name'];
		$telp 		=	$_POST['telp'];
		$status 	=	$_POST['status'];
		$alamat 	=	$_POST['alamat'];
		$kelamin 	=	$_POST['jenis_kelamin'];
		$kelas 		=	$_POST['kelas'];

		$guru 		= 	mysql_query("INSERT INTO users (`id`, `nomor_induk`, `name`, `username`, `password`, `telp`, `alamat`, `status`, `jenis_kelamin`, `kelas_id`, `access`) 
									VALUES (NULL, '$nip', '$name', '$username', '$password', '$telp', '$alamat', '$status', '$kelamin', '$kelas', 'guru')");

		if ($guru) {
			echo "<meta http-equiv='refresh' content='0;URL=?users=guru'>";
		}
	}
?>
<?php 
	//name Create
	if (isset($_POST['create-siswa'])) {
		$nis	 	=	$_POST['nis'];
		$username 	=	$_POST['username'];
		$password 	=	$_POST['password'];
		$name 		=	$_POST['name'];
		$telp 		=	$_POST['telp'];
		$status 	=	$_POST['status'];
		$alamat 	=	$_POST['alamat'];
		$kelamin 	=	$_POST['jenis_kelamin'];
		$kelas 		=	$_POST['kelas'];

		$name 		= 	mysql_query("INSERT INTO users (`id`, `nomor_induk`, `name`, `username`, `password`, `telp`, `alamat`, `status`, `jenis_kelamin`, `kelas_id`, `access`) 
									VALUES (NULL, '$nis', '$name', '$username', '$password', '$telp', '$alamat', '$status', '$kelamin', '$kelas', 'siswa')");

		if ($name) {
			echo "<meta http-equiv='refresh' content='0;URL=?users=siswa'>";
		}
	}
?>
<?php 
	//Kelas Create
	if (isset($_POST['create-kelas'])) {
		$kelasnama	=	$_POST['kelas'];

		$kelas 		= 	mysql_query("INSERT INTO kelas (`kelas_id`, `kelas_nama`) 
									VALUES (NULL, '$kelasnama')");

		if ($kelas) {
			echo "<meta http-equiv='refresh' content='0;URL=?akademik=kelas'>";
		}
	}
?>
<?php 
	//Tahun Create
	if (isset($_POST['create-tahun'])) {
		$tahunnama	=	$_POST['tahun'];

		$tahun 		= 	mysql_query("INSERT INTO tahun (`tahun_id`, `tahun_nama`) 
									VALUES (NULL, '$tahunnama')");

		if ($tahun) {
			echo "<meta http-equiv='refresh' content='0;URL=?akademik=tahun'>";
		}
	}
?>
<?php 
	//Mata Pelajaran Create
	if (isset($_POST['create-pelajaran'])) {
		$pelajarannama	=	$_POST['pelajaran'];

		$pelajaran 		= 	mysql_query("INSERT INTO pelajaran (`pelajaran_id`, `pelajaran_nama`) 
									VALUES (NULL, '$pelajarannama')");

		if ($pelajaran) {
			echo "<meta http-equiv='refresh' content='0;URL=?akademik=pelajaran'>";
		}
	}
?>
<?php 
	//Kategori Create
	if (isset($_POST['create-kategori'])) {
		$kategorinama		=	$_POST['nama'];
		$kategorideskripsi	=	$_POST['deskripsi'];

		$kategori 			= 	mysql_query("INSERT INTO kategori (`kategori_id`, `kategori_nama`, `kategori_deskripsi`) 
									VALUES (NULL, '$kategorinama', '$kategorideskripsi')");

		if ($kategori) {
			echo "<meta http-equiv='refresh' content='0;URL=?artikel=kategori'>";
		}
	}
?>
<?php 
	//Sekolah Create
	if (isset($_POST['create-sekolah'])) {
		$nama		=	$_POST['nama'];
		$alamat		=	$_POST['alamat'];
		$telp		=	$_POST['telp'];
		$visi		=	$_POST['visi'];
		$misi		=	$_POST['misi'];

		$sekolah 			= 	mysql_query("INSERT INTO sekolah (`sekolah_id`, `sekolah_nama`, `sekolah_alamat`, `sekolah_telp`, `sekolah_visi`, `sekolah_misi`) 
									VALUES (NULL, '$nama', '$alamat', '$telp', '$visi', '$misi')");

		if ($sekolah) {
			echo "<meta http-equiv='refresh' content='0;URL=?akademik=sekolah'>";
		}
	}
?>
<?php 
	if (isset($_POST['input-proses'])) {
		$name 		=	$_POST['name'];
		$pelajaran	=	$_POST['pelajaran'];
		$semester 	=	$_POST['semester'];
		$jenis 		=	$_POST['jenis'];
		$tahun 		=	$_POST['tahun'];
		$kkm 		=	$_POST['kkm'];
		$nilaipoin	=	$_POST['nilai'];
		$jumlahdata	=	count($name);

		for($x=0;$x<$jumlahdata;$x++) {
			$nilai	=	mysql_query("INSERT INTO nilai (`nilai_id`, `id`, `pelajaran_id`, `semester_id`, `tahun_id`,`nilai_kkm`, `nilai_poin`) 
										VALUES (NULL, '$name[$x]', '$pelajaran[$x]', '$semester[$x]', '$tahun[$x]', '$kkm[$x]', '$nilaipoin[$x]')");	
			if ($nilai) {
				echo "<meta http-equiv='refresh' content='0;URL= ?nilai=input '/>";
			}else{
				echo "Gagal Input Nilai";
			}
		}
	}
?>
<?php 
	//Upload Modul
	if(isset($_POST['upload'])){
        $allowed_ext    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
        $file_name      = $_FILES['file']['name'];
        $file_ext       = strtolower(end(explode('.', $file_name)));
        $file_size      = $_FILES['file']['size'];
        $file_tmp       = $_FILES['file']['tmp_name'];
        
        $nama           = $_POST['nama'];
        $tgl            = date("Y-m-d");
        
        if(in_array($file_ext, $allowed_ext) === true){
            if($file_size < 20440700){
                $lokasi = 'files/'.$nama.'.'.$file_ext;
                move_uploaded_file($file_tmp, $lokasi);
                $in = mysql_query("INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
                if($in){
                    echo "<meta http-equiv='refresh' content='0;URL= ?modul=download '/>";
                }else{
                    echo '<div class="error">ERROR: Gagal upload file!</div>';
                }
            }else{
                echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 20 Mb!</div>';
            }
        }else{
            echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
        }
    }
?>
<?php 
	//Artikel Create
	if (isset($_POST['create-artikel'])) {
		$judul 		=	$_POST['judul'];
		$isi		=	$_POST['isi'];
		$kategori 	=	$_POST['kategori'];

		$artikel 	=	mysql_query("INSERT INTO artikel (`artikel_id`, `artikel_judul`, `artikel_isi`, `artikel_tgl`, `kategori_id`) 
									VALUES (NULL, '$judul', '$isi', now(), '$kategori')");

		if ($artikel) {
			echo "<meta http-equiv='refresh' content='0;URL=?artikel=list'>";
		}
	}
?>