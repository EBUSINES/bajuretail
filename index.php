<?php 
include "auth/connect.php";
include "header.php";
?>
<div class="container">
    <div class="jumbotron jumbotron-fluid bg-transparent">
        <div class="container mt-5">
          <form>
                <label class="sr-only" for="inlineFormInputGroup">Search</label>
                <div class="input-group w-50 m-auto">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-search"></i></div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search product">
                </div>
          </form>
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
              <img src="https://images.unsplash.com/photo-1485462537746-965f33f7f6a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-center">Fashionable</p></div>
          </div>
        </div>
        <div class="col-6 col-lg-3 mb-5">
           <div class="card border-light">
              <img src="https://images.unsplash.com/photo-1485462537746-965f33f7f6a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-center">Fashionable</p>
          </div>
        </div>
    </div>
</div>

<div class="container">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row row-cols-1 row-cols-md-3">

          <?php  
          $sql   = "SELECT * FROM `produk`";
          $data  = mysqli_query($conn,$sql);
          while($list = mysqli_fetch_array($data)){ ?>
            
              <div class="col mb-4">
                <div class="card h-100">
                  <img
                    src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    class="card-img-top d-block w-100" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?= $list['nama_produk'] ?>
                    <?php 
                    if ($list['jumlah_produk'] > 0) { ?>
                    <span class="badge badge-primary ml-3"><?= $list['jumlah_produk'] ?></span></h5>
                    <?php }else{ ?>
  
                    <span class="badge badge-danger ml-3"><?= $list['jumlah_produk'] ?></span></h5>
                    <?php }?>

                    <?php 
                    if ($list['jumlah_produk'] > 0) { ?>
                      
                    <button type="button" class="btn btn-primary btn-sm btn-block">Order Now</button>
                    <?php }else{ ?>
  
                    <button type="button" class="btn btn-danger btn-sm btn-block disabled">Soldout</button>
                    <?php }
                    
                    ?>
                  </div>
                </div>
              </div>
            <?php  
          } ?>
          
          <!-- <div class="col mb-4">
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
          </div> -->
        </div>
      </div>
      <!-- <div class="carousel-item">
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
      </div> -->
      <!-- <div class="carousel-item">
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
      </div> -->
      </div>
    </div>
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

<?php 
include "footer.php";
?>