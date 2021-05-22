<?php
	include 'koneksi.php';

	echo "<option value=''>Pilih Provinsi</option>";

	$query = "SELECT * FROM prov WHERE id_prov='11' OR id_prov='12' ORDER BY nm_prov ASC";
	$dewan1 = $koneksi->prepare($query);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_prov'] . "'>" . $row['nm_prov'] . "</option>";
	}
?>