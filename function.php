<?php 

// konec ke database
$konek = mysqli_connect("localhost", "root", "", "laboratorium");


function tambah($data) {
	global $konek;

	
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$tgl_upload = date("Ymd");yaml_parse_url(url);
	
	//upload file

	$fupload = apload();
	if ( !$fupload ) {
		return false;
	}

	$query = "INSERT INTO tb_apload (id_apload, nama_file, deskripsi, tgl_upload)
				VALUES('', $fupload', '$deskripsi', '$tgl_upload')";
	mysqli_query($konek,$query);

	return mysqli_affected_rows($konek);

}

function apload(){
	$nama_file = $_FILES['fupload']['name'];
	$ukuran_file = $_FILES['fupload']['size'];
	$error = $_FILES['fupload']['error'];
	$lokasi_file = $_FILES['fupload']['tmp_name'];


	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ){
		echo "<script>
				alert('pilih file terlebih dahulu!')
			 </script>";

			 return false;
	}

	//cek apakah yang diupload adalah dokumen 
	$ekstensiFilevalid = ['docx', 'doc', 'docm', 'dotx', 'dotm', 'PPT', 'PPTX', 'pptm', 'ppsx', 'PDF', 'xlsx', 'Xlsm', ''];
	$ekstensiFile = explode('.', $nama_file);
	$ekstensiFile = strtolower(end($ekstensiFile));

	if( !in_array($ekstensiFile, $ekstensiFilevalid) ){

		echo "<script>
				alert('yang anda apload bukan dokumen!')
			 </script>";
		return false;
	}


	// cek jika ukurannya terlalu besar
	if($ukuran_file > 100000000){
		echo "<script>
				alert('ukuran file terlalu besar!')
			 </script>";
			 return false;
	}

	// lolos pengecekan, file siap diapload
	
	move_uploaded_file($lokasi_file, 'files/' . $nama_file);
	return $nama_file;
}

	


 ?>





