<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="bs/bs/css/bootstrap.min.css">
</head>
<body>
<?php
    $koneksi= mysqli_connect("localhost", "root", "", "pelaporan_pengaduan_masyarakat");
    
  
    $query = $koneksi->query("SELECT * FROM Pengaduan");
   
?>
<nav class="navbar navbar-expand-lg" style="background-color: #7A9D54;">
    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="halaman_pelaporan.php">isi laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
        </li>
      </ul>
 
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="search">
      </form>

      <button type="<button type="button" class="btn btn-light" ><a href="halaman_pelaporan.php">buat laporan</a> </button>
 
   </div>
</div>
 
</nav>
<nav class="navbar navbar-expand-lg navbar-light navbar-light">
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">id</th>
      <th scope="col">tanggal</th>
      <th scope="col">nik</th>
      <th scope="col">isi laporan</th>
      <th scope="col">foto</th>
      <th scope="col">status</th>

    </tr>
  <tbody>
    <?php while( $data = mysqli_fetch_array($query)) : ?>
    <tr>
      <th scope="row">1</th>
      <td><?= $data['id_pengaduan'] ?></td>
      <td><?= $data['tgl_pengaduan'] ?></td>
      <td><?= $data['nik'] ?></td>
      <td><?= $data['isi_laporan'] ?></td>
      <td>
        <img src="longsor.jpg" style="height:80px; weight:80px;">
      </td>
      <td>diproses</td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>
</body>
</html>