
<?php
	mysql_connect("localhost","root","")or die("Gagal Koneksi");
	mysql_select_db("skripsi-rica")or die("Tidak ada Database");

	//fungsi untuk mengkonversi size file
	function formatBytes($bytes, $precision = 2) { 
	    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

	    $bytes = max($bytes, 0); 
	    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
	    $pow = min($pow, count($units) - 1); 

	    $bytes /= pow(1024, $pow); 

	    return round($bytes, $precision) . ' ' . $units[$pow]; 
	} 
?>