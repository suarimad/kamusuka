<?php
session_start();
require 'functions.php';

// if( !isset($_SESSION['username']) ) {
// 	header("Location: login.php");
// 	exit;
// }

if( isset($_GET['cari']) ) {
	$keyword = $_GET['keyword'];
	$sql = "SELECT * FROM reusedata
				WHERE
			 harga LIKE '%$keyword%' OR
			 nama LIKE '%$keyword%' OR
			 size LIKE '%$keyword%' OR
			 brand LIKE '%$keyword%'
			";
	$reusedata = query($sql);
} else {
	$reusedata = query("select * from reusedata");
}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<title>Hello, world!</title>
</head>
<body>

<div id="nav">
    <div id="logo">
        <a href="#"><img src="img/logo.png" alt=""></a>
    </div>
    
    
    <div id="menu" style="">
        
        
        <ul>
            <li><a href="index.php">Lihat Website</a></li>
            <li><a href="#">Logout</a></li>

        </ul>
        
    </div>
</div>






    <div class="container" id="mainadmin">
        <!-- <div class="mainproduct">
            <h1>Our Products</h1>
        </div> -->
        <div class="row add">
            <div class="col s12">
                <a href="#" id="add">Tambah Product</a>
            </div>
        </div>
        <div class="row">
        <?php $i = 1; ?>
        <?php foreach( $reusedata as $row ) { ?>
            <div class="col-sm-3 col-6 itemadmin" id="item">
                <a href="#"><img src="img/<?= $row["gambar"]; ?>" alt=""></a>
                <a href="#"><p id="name"><?= $row["nama"]; ?></p></a>
                <p id="price">IDR. <?= $row["harga"]; ?></p>
                <p id="size">Size : <?= $row["size"]; ?></p>
                <div id="update">
                    <p id="tambah">
                        <div id="edit">
                            <a href="ubah.php?id=<?php echo $row["id"]; ?>"">Edit</a>
                        </div>
                        <div id="delete">
                            <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a>
                        </div>
                        
                    </p>
                </div>
            </div>
            
        <?php $i++; ?>
        <?php } ?>

<!-- Other -->

            <!-- <div class="col-sm-3 col-6" id="item">
                <a href="#"><img src="img/product.jpeg" alt=""></a>
                <a href="#"><p id="name">Hoodie GAP</p></a>
                <p id="price">Rp. 150.000</p>
                <p id="size">Size : XL</p>
            </div>

            <div class="col-sm-3 col-6" id="item">
                <a href="#"><img src="img/product2.jpeg" alt=""></a>
                <a href="#"><p id="name">Hoodie GAP</p></a>
                <p id="price">Rp. 150.000</p>
                <p id="size">Size : XL</p>
            </div>

            <div class="col-sm-3 col-6" id="item">
                <a href="#"><img src="img/product.jpeg" alt=""></a>
                <a href="#"><p id="name">Hoodie GAP</p></a>
                <p id="price">Rp. 150.000</p>
                <p id="size">Size : XL</p>
            </div>

            <div class="col-sm-3 col-6" id="item">
                <a href="#"><img src="img/product.jpeg" alt=""></a>
                <a href="#"><p id="name">Hoodie GAP</p></a>
                <p id="price">Rp. 150.000</p>
                <p id="size">Size : XL</p>
            </div>

            <div class="col-sm-3 col-6" id="item">
                <a href="#"><img src="img/product2.jpeg" alt=""></a>
                <a href="#"><p id="name">Hoodie GAP</p></a>
                <p id="price">Rp. 150.000</p>
                <p id="size">Size : XL</p>
            </div>

            <div class="col-sm-3 col-6" id="item">
                <a href="#"><img src="img/product.jpeg" alt=""></a>
                <a href="#"><p id="name">Hoodie GAP</p></a>
                <p id="price">Rp. 150.000</p>
                <p id="size">Size : XL</p>
            </div>

            <div class="col-sm-3 col-6" id="item">
                <a href="#"><img src="img/product.jpeg" alt=""></a>
                <a href="#"><p id="name">Hoodie GAP</p></a>
                <p id="price">Rp. 150.000</p>
                <p id="size">Size : XL</p>
            </div> -->



<!-- Other -->


        </div>
            <div class="row add">
                <div class="col s12 ">
                    <a href="#" id="add">Tambah Product</a>
            </div>
        </div>
    </div>

</div>

<div class="kaki">
    <div class="copyright">&copy;2020 Kamusukathrift</div>
    <div class="by">Made by <a href="https://instagram.com/densupd">@densupd</a></div>
</div>


<script>
    $('.carousel').carousel({
    touch: true
})
</script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>