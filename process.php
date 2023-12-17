<?php
$konek = mysqli_connect('localhost', 'root', '', 'ttd');
$sig_string = $_POST['signature'];
$nama_file = "signature_" . date("his") . ".png";
file_put_contents($nama_file, file_get_contents($sig_string));
if (file_exists($nama_file)) {
	mysqli_query($konek, "INSERT INTO paraf VALUE ('','$nama_file')");
	echo "<p>File Signature berhasil disimpan - " . $nama_file . "</p>";
	echo "<p style='border:solid 1px teal;width:355px;height:110px;'><img src='" . $nama_file . "'></p>";
}
