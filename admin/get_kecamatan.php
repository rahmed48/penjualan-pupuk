<?php
	include 'koneksi.php';
	$kabupaten = $_POST['kabupaten'];
        
	echo "<option value=''>Pilih Kecamatan</option>";

	$query = "SELECT * FROM kec WHERE id_kab='$kabupaten' ORDER BY nm_kec ASC";
	$dewan1 = $koneksi->prepare($query);
	$dewan1->bind_param("i", $kabupaten);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_kec'] . "'>" . $row['nm_kec'] . "</option>";
	}
	?>