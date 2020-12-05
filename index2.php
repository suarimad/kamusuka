<?php
session_start();
require 'functions.php';

// if( !isset($_SESSION['username']) ) {
// 	header("Location: login.php");
// 	exit;
// }

if( isset($_GET['cari']) ) {
	$keyword = $_GET['keyword'];
	$sql = "SELECT * FROM mahasiswa
				WHERE
			 harga LIKE '%$keyword%' OR
			 nama LIKE '%$keyword%' OR
			 size LIKE '%$keyword%' OR
			 brand LIKE '%$keyword%'
			";
	$mahasiswa = query($sql);
} else {
	$mahasiswa = query("select * from mahasiswa");
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

    <title>Hello, world!</title>
</head>
<body>
    <!-- As a link -->
    <nav class="navbar fixed-top" style="background-color:black;">
        <a class="navbar-brand" href="#" "><img src="img/navlogo.png" style="width:200px;" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button>
    </nav>
    <br><br><br><br><br>
    <div class="main ">
            <div class="row">
                <div class="col-sm-2">
                    <div class="row">

                        <br>
                        <div class="col-md-4 col-sm-4 col text-center">
                            <a class="btn" style="" data-toggle="collapse" href="#filterItem" role="button" aria-expanded="false" aria-controls="collapseExample"><h5>Items</h5></a>
                            
                        </div>
                        <div class="col-md-4 col-sm-4 col text-center">
                            <a class="btn" style="" data-toggle="collapse" href="#filterSize" role="button" aria-expanded="false" aria-controls="collapseExample"><h5>Sizes</h5></a>
                            
                        </div>
                        <div class="col-md-4 col-sm-4 col text-center ">
                            <a class="btn" style="" data-toggle="collapse" href="#filterBrand" role="button" aria-expanded="false" aria-controls="collapseExample"><h5>Brands</h5></a>
                            
                        </div>
                    </div>
                    <br>
                    <div class="row ">

                        <div class="col-sm-12">
                            <div class="collapse rounded-bottom" id="filterItem">
                            <div class="card card-body border-0">
                                <div class="row mx-auto">
                                    <div class="col-auto ">
                                        <a href="#" class="" style="color:black;"><h6>Crewneck</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>Sneakers</h6></a>
                                    </div>    
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-12">
                            <div class="collapse rounded-bottom" id="filterSize">
                            <div class="card card-body border-0">
                                <div class="row mx-auto">
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>M</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>L</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>XL</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>35</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>36</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>37</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>38</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>39</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>40</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>41</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>42</h6></a>
                                    </div>        
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-12">
                            <div class="collapse rounded-bottom" id="filterBrand">
                            <div class="card card-body border-0">
                                <div class="row mx-auto">
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>Adidas</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>Converse</h6></a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>Nike</h6></a>
                                    </div>        
                                    <div class="col-auto">
                                        <a href="#" class="" style="color:black;"><h6>Vans</h6></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-10 ">
                    <div class="row mx-auto">
                    <?php $i = 1; ?>
                    <?php foreach( $mahasiswa as $row ) { ?>
                        <div class="col-sm-2 col-6">
                            <div class="card mx-auto img-fluid" style="width: 13rem;">
                            <a href="#"><img src="img/<?= $row["gambar"]; ?>" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="#"><p class="card-text"><?= $row["nama"]; ?></p></a>
                                <h6>Size : <?= $row["size"]; ?></h6>
                                <p class="card-title" style="font-weight:bold;">IDR. <?= $row["harga"]; ?></p>
                                <a href="#"><p class="btn btn-outline-dark btn-sm"><?= $row["brand"]; ?></p></a>
                            </div>
                        </div>
                        <br>
                        </div>
                    <?php $i++; ?>
                    <?php } ?>
                    </div>
                </div>
            </div>




            <!-- <div class="sidebar">
            </div>
            <div class="main">
                <div class="row">
                
                    <div class="col-sm-3">
                    
                        
                        <br>
                    </div>  
                </div>
            </div> -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script>
        $('#myCollapsible').collapse({
        dispose: true;
    })
    </script>
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