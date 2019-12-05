<?php 
include '../header.php';
?>
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
                            <label for="exampleFormControlInput1">Jumlah Baju</label>
                            <input type="number" min="1" class="form-control" id="inputbaju">
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
                    <textarea class="form-control" id="keterangan" rows="3"></textarea>
                </div>
                <div class="form-group mb-auto">
                    <button class="btn bnt-sm btn-success" onclick="add()"><i class="fa fa-plus"></i> Add</button>
                    <button class="btn bnt-sm btn-primary"><i class="fa fa-shopping-cart"></i> Checkout</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-3 ml-auto">
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
<?php 
include '../footer.php';
?>