
<?php session_start();

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
      <link rel="stylesheet" href="style.css">
     <title>Hello, wosrld!</title>
 </head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BRetail</a>
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
    </nav>
    <div class="jumbotron jumbotron-fluid bg-transparent">
            <div class="container">
              <form>
                    <label class="sr-only" for="inlineFormInputGroup">Search</label>
                    <div class="input-group w-50 m-auto">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-search"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search product">
                    </div>
            </div>
          </div>
    <div class="row">
        <div class="col-6 col-lg-3 mb-5">
                <div class="card border-light">
                        <img src="https://images.unsplash.com/photo-1485462537746-965f33f7f6a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text text-center">Fashionable</p>
                        </div>
                </div>
        </div>
        <div class="col-6 col-lg-3 mb-5">
                <div class="card border-light">
                        <img src="https://images.unsplash.com/photo-1574874920378-7c8112ba41fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text text-center">Kemeja & Jas</p>
                        </div>
                        </div>
        </div>
        <div class="col-6 col-lg-3 mb-5">
                <div class="card border-light">
                        <img src="https://images.unsplash.com/photo-1487033858121-f6f74a05c1de?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text text-center">Children</p>
                        </div>
                        </div>

        </div>
        <div class="col-6 col-lg-3 mb-5">
                <div class="card border-light">
                        <img src="https://images.unsplash.com/photo-1553655069-ee9f74558f7b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text text-center">Sweater</p>
                        </div>
                        </div>
        </div>
    </div>
</div>
<div class="container">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card h-100">
              <img
                src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top d-block w-100" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <button type="button" class="btn btn-primary btn-sm btn-block">Order Now</button>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img
                src="https://images.unsplash.com/photo-1504276048855-f3d60e69632f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="#" class="btn btn-danger btn-sm btn-block disabled" tabindex="-1" role="button"
                  aria-disabled="true">Soldout</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img
                src="https://images.unsplash.com/photo-1503185912284-5271ff81b9a8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <button type="button" class="btn btn-primary btn-sm btn-block">Order Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card h-100">
              <img
                src="https://images.unsplash.com/photo-1514315384763-ba401779410f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <button type="button" class="btn btn-primary btn-sm btn-block">Order Now</button>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img
                src="https://images.unsplash.com/photo-1496840220025-4cbde0b9df65?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <button type="button" class="btn btn-primary btn-sm btn-block">Order Now</button>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img
                src="https://images.unsplash.com/photo-1502982899975-893c9cf39028?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <button type="button" class="btn btn-primary btn-sm btn-block">Order Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card h-100">
            <img
              src="https://images.unsplash.com/photo-1496840220025-4cbde0b9df65?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
              class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <button type="button" class="btn btn-primary btn-sm btn-block">Order Now</button>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img
              src="https://images.unsplash.com/photo-1514315384763-ba401779410f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
              class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <button type="button" class="btn btn-primary btn-sm btn-block">Order Now</button>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img
              src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
              class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <button type="button" class="btn btn-primary btn-sm btn-block">Order Now</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>
  <div class="row">
    <div class="col">
      <p class="text-center"><a href="#carouselExampleControls" data-slide="prev" style="text-decoration: none;">
          <i class="fa fa-arrow-left"></i> Prev</p></a>
    </div>
    <div class="col">
      <p class="text-center"><a href="#carouselExampleControls" role="button" data-slide="next"
          style="text-decoration: none;">Next <i class="fa fa-arrow-right"></i></a></p>
    </div>
  </div>
      
</div>
</div>
<div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 col">
                <div class="col mb-4">
                  <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Baju 1</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1503185912284-5271ff81b9a8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Baju 2</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1504276048855-f3d60e69632f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Baju 3</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1514315384763-ba401779410f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Baju 4</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1496840220025-4cbde0b9df65?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Baju 4</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                        <div class="card h-100">
                          <img src="https://images.unsplash.com/photo-1502982899975-893c9cf39028?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Baju 5</p>
                          </div>
                        </div>
                </div>
        </div>
</div>
<div class="container">
  <div class="footer">
  </div>
</div>
<?php $_SESSION["baju"] = $_POST[""]; ?>
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