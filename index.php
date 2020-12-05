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
    
    <div id="menu">
        
        
        <ul>
        <?php $reusecat = query("SELECT DISTINCT cat FROM reusedata"); ?>
        <?php $i = 1; ?>
        <?php foreach( $reusecat as $row ) { ?>
            <li><a href="#"><?= $row["cat"]; ?></a></li>
            <!-- <li><a href="#">Hoodie</a></li>
            <li><a href="#">Zipper</a></li> -->
        <?php $i++; ?>
        <?php } ?>
        </ul>
        
    </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" id="carousel-item">
      <img src="img/banner.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" id="carousel-item">
      <img src="img/banner.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" id="carousel-item">
      <img src="img/banner.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div id="main">
<div class="jumbotron">
  <div class="row">
      <div class="col-sm-12">
          <h1>Shop By Category</h1>
          <p>Feeling lost and don’t know where to start?
Browse through our collection by categories.

</p>
      </div>
  </div>
  
  

  <div class="row">
      <div class="col-sm-4" id="catJacket">
          <img style="width:100%;" src="img/Jacket.jpeg" alt="">
          <a href="#"><p id="category">JACKET</p></a>
      </div>

      <div class="col-sm-4" id="catHoodie">
          <img style="width:100%;" src="img/Hoodie.jpeg" alt="">
          <a href="#"><p id="category">HOODIE</p></a>
      </div>

      <div class="col-sm-4" id="catCrewneck">
          <img style="width:100%;" src="img/Crewneck.jpeg" alt="">
          <a href="#"><p id="category">CREWNECK</p></a>
      </div>
  </div>
  
</div>





    <div class="container">
        <div class="mainproduct">
            <h1>Our Products</h1>
        </div>
        <div class="row">
        <?php $i = 1; ?>
        <?php foreach( $reusedata as $row ) { ?>
            <div class="col-sm-3 col-6" id="item">
                <a href="#"><img src="img/<?= $row["gambar"]; ?>" alt=""></a>
                <a href="#"><p id="name"><?= $row["nama"]; ?></p></a>
                <p id="price">IDR. <?= $row["harga"]; ?></p>
                <p id="size">Size : <?= $row["size"]; ?></p>
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