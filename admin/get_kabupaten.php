<?php
	include 'koneksi.php';
	$provinsi = $_POST['provinsi'];
        
	echo "<option value=''>Pilih Kabupaten</option>";

	$query = "SELECT * FROM kab WHERE id_prov='$provinsi' ORDER BY nm_kab ASC";
	$dewan1 = $koneksi->prepare($query);
	$dewan1->bind_param("i", $provinsi);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_kab'] . "'>" . $row['nm_kab'] . "</option>";
	}
	?>