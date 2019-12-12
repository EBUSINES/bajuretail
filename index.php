<?php 
include "header.php";
?>
<!-- Search Produk -->
<div class="container">

<!-- Best Offer -->
<div class="container best-offer">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row row-cols-1 row-cols-md-3">
          <?php  
          $sql   = "SELECT * FROM `produk` WHERE id_produk <= 3";
          $data  = mysqli_query($conn,$sql);
          while($list = mysqli_fetch_array($data)){ ?>
              <div class="col mb-4">
                <div class="card h-100">
                  <img
                    src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    class="card-img-top d-block" style="width:auto;height:420px;" alt="...">
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
                      
                    <a class="btn btn-primary btn-sm btn-block text-decoration-none text-uppercase" href="<?= BASE_URL ?>/view/order.php?id=<?= $list['id_produk']?>">Order Now</a>
                    <?php }else{ ?>
  
                    <a class="btn btn-danger btn-sm disabled btn-block" tabindex="-1" role="button" aria-disabled="true">Soldout</a>
                    <?php }
                    
                    ?>
                  </div>
                </div>
              </div>
            <?php  
          } ?>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row row-cols-1 row-cols-md-3">
          <?php 
          $sql    = "SELECT * FROM `produk` WHERE id_produk >= 4 AND id_produk <= 6";
          $query  = mysqli_query($conn,$sql);
          while ($list = mysqli_fetch_array($query)) { ?>
          <div class="col mb-4">
            <div class="card h-100">
              <img
                src="https://images.unsplash.com/photo-1514315384763-ba401779410f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" style="width:auto;height:420px;" alt="...">
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
                      
                    <a class="btn btn-primary btn-sm btn-block text-decoration-none text-uppercase" href="<?= BASE_URL ?>/view/order.php?id=<?= $list['id_produk'] ?>">Order Now</a>
                    <?php }else{ ?>
  
                    <a class="btn btn-danger btn-sm disabled btn-block" tabindex="-1" role="button" aria-disabled="true">Soldout</a>
                    <?php }
                    ?>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
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

<!-- BEST SELLERS -->
<div class="container best-selling">
    <h1 class="best-selling">Best Selling</h1>
    <div class="row row-cols-1 row-cols-md-3 col">
      <?php 
      $sql    = "SELECT DISTINCT produk.nama_produk FROM `transaksi` INNER JOIN produk ON produk.id_produk = transaksi.id_produk";
      $query  = mysqli_query($conn,$sql);
      while ($list = mysqli_fetch_object($query)) { ?>
        <div class="col col-lg-3 mb-4">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:auto;height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><p class="text-center"><?= $list->nama_produk ?></p></h5>
            </div>
          </div>
        </div>
      <?php } ?>
  </div>
</div>

<?php 
include "footer.php";
?>