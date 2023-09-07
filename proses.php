<?php
#koneksi
$servername = "localhost";
$username = "id21231314_bengkelku";
$password = "Bookingbengkel@123";
$dbname = "id21231314_login_register";

$conn = mysqli_connect($servername, $username, $password, $dbname);

#proses
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tanggal=$_POST['tanggal'];
$plat_no=$_POST['plat_no'];
$nama_motor=$_POST['nama_motor'];
$tahun_kendaraan=$_POST['tahun_kendaraan'];
$paket_service=$_POST['paket_service'];
$turun_mesin=$_POST['turun_mesin(Overhoul)'];
$keluhan=$_POST['keluhan'];

$sql = "INSERT INTO booking_service VALUES (null, '$nama', '$alamat', '$tanggal', '$plat_no', '$nama_motor', '$tahun_kendaraan', '$paket_service', '$turun_mesin(Overhoul)', '$keluhan')";
if ($conn->query($sql) === TRUE) {
    echo"Data Berhasil Ditambahkan";
}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>