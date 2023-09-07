  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
</html>
<body>
<h1><center>Form Booking Service Motor</h1>
<br>
<form method="post" action="proses.php">
<div style="padding:5px">
<table border=0 cellpadding=5 cellspacing=0>
<tr>
<td>Nama</td> <td>:</td>
<td><input type="text" maxlength="30" name="nama" size="50"></td>
</tr>
<tr>
<td>Alamat</td> <td>:</td>
<td><input type="text" maxlength="30" name="alamat" size="50"></td>
</tr>
<tr>
<td>Tanggal</td> <td>:</td>
<td><input type="date" maxlength="30" name="tanggal" size="50"></td>
</tr>
<td>Plat No</td> <td>:</td>
<td><input type="text" maxlength="30" name="plat_no" size="50"></td>
</tr>
<tr>
<td>Nama Motor</td> <td>:</td>
<td><input type="text" maxlength="30" name="nama_motor" size="50"></td>
</tr>
<tr>
<td>Tahun Kendaraan</td> <td>:</td>
<td><input type="text" maxlength="30" name="tahun_kendaraan" size="50"></td>
</tr>
<tr>
<td>Paket Service</td> <td>:</td>
<td><input type="radio" maxlength="30" name="paket_service" value="servis_ringan" > Service Ringan<br>
<input type="radio" maxlength="30" name="paket_service" value="servis_komplit" checked="checked"> Service Komplit</td>
</tr>
<tr>
<td>Turun Mesin(Overhoul)</td> <td>:</td>
<td><select name="turun_mesin(Overhoul)">
    <option>Frame(rangka)</option>
    <option>Mesin</option>
    <option>Kelistrikan</option>
    <option>Tidak</option>
</tr>
<tr>
<td>Keluhan</td> <td>:</td>
<td><input type="text" maxlength="500" name="keluhan" size="50"></td>
</tr>
<tr>
<td><input type="submit" value="Simpan" name="Simpan" class="btn btn-primary"></div>
</tr>
</table>
<div>
</form>