<?php session_start(); ?>

<!doctype html>
 <html lang="en">
 <head> 
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <script src="https://use.fontawesome.com/29b20f302a.js"></script>
      <link rel="stylesheet" href="style.css">
     <title>Hello, wosrld!</title>
 </head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
                <a class="navbar-brand" href="#">BRetail<?php echo $_SESSION["baju"]; ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-5 active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-5">
                      <a class="nav-link" href="#">Diskon</a>
                    </li>
                    <li class="nav-item mr-5">
                      <a class="nav-link" href="#">Kategori</a>
                    </li>
                    <li class="nav-item mr-5">
                      <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Login</a>
                    </li>
                  </ul>
                </div>
                </div>
</nav>
<div class="container" style="margin-top:8%;">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="card border-light" style="width: 15rem;">
                <img src="https://images.unsplash.com/photo-1446447058589-03a67b4b50c6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-center">Baju Basket</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <form action="">
                <h1>Baju Basket</h1><hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col col-md-3">
                            <label for="exampleFormControlInput1">Jumlah</label>
                            <input type="number" min="1" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="customRadioInline1">Ukuran Baju</label>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">M</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">S</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline3">L</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline4">XL</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline5" name="customRadioInline1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline5">XXL</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Keterangan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group mb-auto">
                    <button class="btn bnt-sm btn-primary"><i class="fa fa-shopping-cart"></i> Checkout</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-3 mt-4 ml-auto">
            <ul class="list-unstyled">
                <li class="media mb-2">
                    <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        class="mr-3" style="width: 64px;height: 64px;" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Jeans</h5>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </li>
                <li class="media mb-2">
                    <img src="https://images.unsplash.com/photo-1558046635-d3fc71c0b051?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        class="mr-3" style="width: 64px;height: 64px;" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Longsleeve</h5>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </li>
                <li class="media mb-2">
                    <img src="https://images.unsplash.com/photo-1571729024267-e0120826dfe6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        class="mr-3" style="width: 64px;height: 64px;" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Sweater</h5>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </li>
                <li class="media mb-2">
                    <img src="https://images.unsplash.com/photo-1550898363-97b48aa83ebe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        class="mr-3" style="width: 64px;height: 64px;" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Jersey</h5>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </li>
                <li class="media mb-2">
                    <img src="https://images.unsplash.com/photo-1556306535-0f09a537f0a3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        class="mr-3" style="width: 64px;height: 64px;" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Topi</h5>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container mt-2">
  <div class="footer">
  </div>
</div>
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
         integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
         integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
         integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
     </script>
 </body>

 </html>