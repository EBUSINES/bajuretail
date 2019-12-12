 <?php 
 include "auth/connect.php";
 ?>
 <!doctype html>
 <html lang="en">
 <head> 
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <script src="https://use.fontawesome.com/29b20f302a.js"></script>
      <link rel="stylesheet" href="<?= BASE_CSS ?>">
     <title>BajuRetailku | Online Shop</title>
 </head>
<body>
<div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="<?= BASE_URL ?>">BajuRetailKu</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mr-5 active">
                <a class="nav-link" href="<?= BASE_URL ?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mr-5">
                <a class="nav-link" href="<?= BASE_URL.'/kategori.php' ?>">Kategori</a>
              </li>
              <li class="nav-item mr-5">
                <a class="nav-link" href="<?= BASE_URL.'/how-to-pay.php' ?>">Cara Pembelian</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</div>