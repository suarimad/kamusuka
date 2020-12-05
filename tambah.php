<?php 
require 'functions.php';

if( isset($_POST["tambah"]) ) {
	if( tambah($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'admin.php';
			  </script>";
	}
}
?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Produk</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="img/logo.png">

	<style>
		ul li { list-style: none; }
	</style>
</head>
<body>
<div id="nav">
    <div id="logo">
        <a href="#"><img src="img/logo.png" alt=""></a>
        
    </div>

    
    
</div>

	<div class="tambah">
		<div class="labels">

		
		</div>
        <div class="addproduct" style="margin-top:120px;font-size:30px;font-weight:bold;">
        <a id="back" href="admin.php" style="margin-top:200px;border:1px solid black;">back</a><br><br>
		<h1 style="text-align:center;">TAMBAH PRODUK</h1>
        
        </div>
        

		<form action="" method="post" enctype="multipart/form-data" style=";margin-bottom:100px;">
			<ul>
				<li>
					<!-- <label for="harga">Harga : </label> -->
					<input type="text" name="harga" id="harga" placeholder="Masukkan Harga"><br>
				</li>
				<li>
					<!-- <label for="nama">Nama : </label> -->
					<input type="text" name="nama" id="nama" placeholder="Masukkan Nama Produk"><br>
				</li>
                <li>
					<!-- <label for="cat">Kategori : </label> -->
					<input type="text" name="cat" id="cat" placeholder="Pilih Kategori"><br>
				</li>
			    <li>
					<!-- <label for="cat">Kategori : </label> -->
					<input type="text" name="size" id="size"  style="margin:auto;" placeholder="Pilih Size"><br>
				</li>
				<li>
					<!-- <label for="brand">Brand : </label> -->
					<input type="text" name="brand" id="brand" placeholder="Masukkan Brand"><br>
				</li>
				<li>
					<!-- <label for="gambar">Gambar : </label> -->
					<input type="file" name="gambar" id="gambar">
				</li>
				<li>
					<button type="submit" name="tambah">Tambah Data!</button>
				</li>
			</ul>
		</form>
	</div>

<div class="kaki">
    <div class="copyright">&copy;2020 Kamusukathrift</div>
    <div class="by">Made by <a href="https://instagram.com/densupd">@densupd</a></div>
</div>

</body>
</html>