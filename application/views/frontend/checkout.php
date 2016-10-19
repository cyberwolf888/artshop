<?php  $this->load->view('frontend/header1');  ?>
<style>
    .shop table.cart .product-name {
        width: 40%;
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
                <h2 class="mb-none"><strong>Checkout</strong></h2>
                <p>Returning customer? <a href="shop-login.html">Click here to login.</a></p>
            </div>
        </div>

        <form action="" id="frmBillingAddress" method="post">
            <div class="row">
                <div class="col-md-8">

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Shipping Address
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="panel-body">

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Address</label>
                                                    <input name="address" type="text" value="<?= $member->alamat ?>" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Full Name</label>
                                                    <input name="fullname" type="text" value="<?= $member->fullname ?>" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>No. Handphone</label>
                                                <input name="no_hp" type="text" value="<?= $member->no_hp ?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>State</label>
                                                    <input name="state" type="text" value="Bali" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Zip Code </label>
                                                    <input name="zip_code" type="text" value="<?= $member->kode_pos ?>" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Note (Optional)</label>
                                                    <textarea name="note" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        Review & Payment
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="panel-body">
                                    <table class="shop_table cart">
                                        <thead>
                                        <tr>
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
                                        <?php foreach ($this->cart->contents() as $content): ?>
                                        <?php $image = $this->productImagesModel->getOneByProduct($content['id'])->result()[0]; ?>
                                        <tr class="cart_table_item">
                                            <td class="product-thumbnail">
                                                <a href="<?= base_url('product/'.$content['id']) ?>">
                                                    <img width="100" height="100" alt="" class="img-responsive" src="<?= base_url('images/product/'.$content['id'].'/mini_'.$image->image) ?>">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="<?= base_url('product/'.$content['id']) ?>"><?= $content['name'] ?></a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">Rp. <?= number_format($content['price'],0,',','.') ?></span>
                                            </td>
                                            <td class="product-quantity">
                                                <?= $content['qty'] ?>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">Rp. <?= number_format($content['price']*$content['qty'],0,',','.') ?></span>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                    <hr class="tall">

                                    <h4 class="heading-primary">Cart Totals</h4>
                                    <table class="cart-totals">
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>
                                                <strong>Cart Subtotal</strong>
                                            </th>
                                            <td>
                                                <strong><span class="amount">Rp. <?= number_format($this->cart->total(),0,',','.') ?></span></strong>
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

                                    <hr class="tall">

                                    <h4 class="heading-primary">Payment</h4>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="remember-box checkbox">
                                                    <label>
                                                        <input type="checkbox" checked="checked">Direct Bank Transfer
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="actions-continue">
                        <input type="submit" value="Place Order" name="proceed" class="btn btn-lg btn-primary mt-xl">
                    </div>

                </div>
                <div class="col-md-4">
                    <h4 class="heading-primary">Cart Totals</h4>
                    <table class="cart-totals">
                        <tbody>
                        <tr class="cart-subtotal">
                            <th>
                                <strong>Cart Subtotal</strong>
                            </th>
                            <td>
                                <strong><span class="amount">Rp. <?= number_format($this->cart->total(),0,',','.') ?></span></strong>
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
        </form>
    </div>

</div>

<?php if(isset($script)) {
    $this->load->view('frontend/footer1',['script'=>$script]);
}else{
    $this->load->view('frontend/footer1');
}
?>
