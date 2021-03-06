<?php  $this->load->view('frontend/header1');  ?>
<style>
    .shop table.cart .product-name {
        width: 50% !important;
    }
</style>
<div role="main" class="main shop">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <hr class="tall">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="featured-boxes">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="featured-box featured-box-primary align-left mt-sm">
                                <div class="box-content">
                                    <form method="post" action="#">
                                        <table class="shop_table cart">
                                            <thead>
                                            <tr>
                                                <th class="product-remove">
                                                    &nbsp;
                                                </th>
                                                <th class="product-thumbnail">
                                                    &nbsp;
                                                </th>
                                                <th class="product-name">
                                                    Product
                                                </th>
                                                <th class="product-price">
                                                    Price
                                                </th>
                                                <th class="product-quantity">
                                                    Quantity
                                                </th>
                                                <th class="product-subtotal">
                                                    Total
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($this->cart->contents() as $key=>$row): ?>
                                            <?php $image = $this->productImagesModel->getOneByProduct($row['id'])->result()[0]; ?>
                                            <tr class="cart_table_item">
                                                <td class="product-remove">
                                                    <a title="Remove this item" class="remove" href="<?= base_url('frontend/delCart/'.$key) ?>">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="<?= base_url('product/'.$row['id']) ?>">
                                                        <img width="100" height="100" alt="" class="img-responsive" src="<?= base_url('images/product/'.$row['id'].'/mini_'.$image->image) ?>">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="<?= base_url('product/'.$row['id']) ?>"><?= $row['name'] ?></a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amount">Rp. <?= number_format($row['price'],0,',','.') ?></span>
                                                </td>
                                                <td class="product-quantity">
                                                    <form enctype="multipart/form-data" method="post" class="cart">
                                                        <div class="quantity">
                                                            <input type="button" class="minus" value="-" onclick="minQty('<?= $key ?>',1)">
                                                            <input id="<?= $key ?>" type="text" class="input-text qty text" title="Qty" value="<?= $row['qty'] ?>" name="quantity" min="1" step="1">
                                                            <input type="button" class="plus" value="+" onclick="addQty('<?= $key ?>',1)">
                                                        </div>
                                                    </form>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="amount">Rp. <?= number_format($row['price']*$row['qty'],0,',','.') ?></span>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <tr>
                                                <td class="actions" colspan="6">
                                                    <div class="actions-continue">
                                                        <input type="submit" value="Update Cart" name="update_cart" class="btn btn-default">
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="featured-boxes">
                    <div class="row">
                        <!-- <div class="col-sm-6">
                            <div class="featured-box featured-box-primary align-left mt-xlg">
                                <div class="box-content">
                                    <h4 class="heading-primary text-uppercase mb-md">Calculate Shipping</h4>
                                    <form action="http://preview.oklerthemes.com/" id="frmCalculateShipping" method="post">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Address</label>
                                                    <input name="address" type="text" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label>State</label>
                                                    <input name="state" type="text" value="" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Zip Code</label>
                                                    <input name="zipcode" type="text" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="submit" value="Update Totals" class="btn btn-default pull-right mb-xl" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-sm-12">
                            <div class="featured-box featured-box-primary align-left mt-xlg">
                                <div class="box-content">
                                    <h4 class="heading-primary text-uppercase mb-md">Cart Totals</h4>
                                    <table class="cart-totals">
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>
                                                <strong>Cart Subtotal</strong>
                                            </th>
                                            <td>
                                                <strong><span class="amount"></span>Rp. <?= number_format($this->cart->total(),0,',','.') ?></strong>
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>
                                                Shipping
                                            </th>
                                            <td>
                                                Free Shipping<input type="hidden" value="free_shipping" id="shipping_method" name="shipping_method">
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <th>
                                                <strong>Order Total</strong>
                                            </th>
                                            <td>
                                                <strong><span class="amount">Rp. <?= number_format($this->cart->total(),0,',','.') ?></span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="actions-continue">
                            <a href="<?= base_url('checkout') ?>" class="btn pull-right btn-primary btn-lg">Proceed to Checkout <i class="fa fa-angle-right ml-xs"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<?php if(isset($script)) {
    $this->load->view('frontend/footer1',['script'=>$script]);
}else{
    $this->load->view('frontend/footer1');
}
?>