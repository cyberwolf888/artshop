<?php  $this->load->view('frontend/header1');  ?>

<div role="main" class="main shop">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <hr class="tall">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">

                <div class="owl-carousel owl-theme" data-plugin-options='{"items": 1}'>
                    <?php foreach ($images as $image): ?>
                        <div>
                            <div class="thumbnail">
                                <img alt="" class="img-responsive img-rounded" src="<?= base_url('images/product/'.$model->id.'/mini_'.$image->image) ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

            <div class="col-md-6">

                <div class="summary entry-summary">

                    <h1 class="mb-none"><strong><?= $model->name ?></strong></h1>
                    <!--
                    <div class="review_num">
                        <span class="count" itemprop="ratingCount">2</span> reviews
                    </div>

                    <div title="Rated 5.00 out of 5" class="star-rating">
                        <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                    </div>
                    -->
                    <p class="price">
                        <span class="amount">Rp. <?= number_format($model->price,0,',','.') ?></span>
                    </p>

                    <p class="taller"><?= $model->description ?> </p>

                    <form enctype="multipart/form-data" method="post" class="cart">
                        <div class="quantity">
                            <input type="button" class="minus" value="-">
                            <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                            <input type="button" class="plus" value="+">
                        </div>
                        <button href="#" class="btn btn-primary btn-icon">Add to cart</button>
                    </form>

                    <div class="product_meta">
                        <span class="posted_in">Categories: <a rel="tag" href="<?= base_url('category/'.$category->id) ?>"><?= $category->label ?></a>.</span>
                    </div>

                </div>


            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tabs tabs-product">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#productDescription" data-toggle="tab">Description</a></li>
                        <li><a href="#productInfo" data-toggle="tab">Aditional Information</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="productDescription">
                            <p><?= $model->description ?></p>
                        </div>
                        <div class="tab-pane" id="productInfo">
                            <table class="table table-striped mt-xl">
                                <tbody>
                                <?php foreach ($details as $detail): ?>
                                <tr>
                                    <th>
                                        <?= $detail->label ?>
                                    </th>
                                    <td>
                                        <?= $detail->value ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <hr class="tall">

                <h4 class="mb-md text-uppercase">Related <strong>Products</strong></h4>

                <div class="row">

                    <ul class="products product-thumb-info-list">
                        <?php foreach ($related as $row): ?>
                            <?php if($row->id != $model->id): ?>
                                <li class="col-md-3 col-sm-6 col-xs-12 product">
                                    <?php if($row->isSale == "1"): ?>
                                        <a href="<?= base_url('/product/'.$row->id) ?>">
                                            <span class="onsale">Sale!</span>
                                        </a>
                                    <?php endif; ?>
                                    <span class="product-thumb-info">
                                        <a href="<?= base_url('cart') ?>" class="add-to-cart-product">
                                            <span><i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                        </a>
                                        <a href="<?= base_url('/product/'.$row->id) ?>">
                                            <span class="product-thumb-info-image">
                                                <span class="product-thumb-info-act">
                                                    <span class="product-thumb-info-act-left"><em>View</em></span>
                                                    <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
                                                </span>
                                                <img alt="" class="img-responsive" src="<?= base_url('images/product/'.$row->id.'/mini_'.$row->image) ?>">
                                            </span>
                                        </a>
                                        <span class="product-thumb-info-content">
                                            <a href="<?= base_url('/product/'.$row->id) ?>">
                                                <h4><?= $row->name ?></h4>
                                                <span class="price">
                                                    <span class="amount">RP. <?= number_format($row->price, 0, ',','.') ?></span>
                                                </span>
                                            </a>
                                        </span>
                                    </span>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>

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
